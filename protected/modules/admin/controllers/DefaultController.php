<?php

class DefaultController extends RController {
	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
			'rights', // perform access control for CRUD operations

		);
	}

	public function allowedActions() {
		return 'index,error,login,logout,resetpassword';
	}

	public function actionIndex() {
		//var_dump( Yii::app()->user->isSuperuser );  // return true if superuser => admin
		$this->render('index');
	}

	public function actionError() {
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest) {
				echo $error['message'];
			} else {

				$this->render('error', $error);
			}
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		$this->layout = 'column1';

		$model = new AdminLoginForm;

		// if it is ajax validation request
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if (isset($_POST['AdminLoginForm'])) {
			$model->attributes = $_POST['AdminLoginForm'];

			// validate user input and redirect to the previous page if valid
			if ($model->validate() && $model->login()) {
				$this->redirect('/admin/default');
			}

		}
		// display the login form
		$this->render('login', array('model' => $model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		Yii::app()->user->logout();
		$this->redirect('/admin/default/login');
	}

    public function actionResetpassword() {
        $this->layout     = 'column1';
        $model = new Confirmation();
        $url   = $this->createUrl('/admin/default/resetpassword');
        $title = 'Reset Password';
        
        if( isset( $_GET['token'] ) AND !empty( $_GET['token'] ) ) {

            $user = OrganizationUser::model()->findByAttributes( array('perishable_token' => $_GET['token']) );
            if( $user AND $user->forget_password_expiration > date("Y-m-d H:i:s") ) {
                $model = new ResetPasswordForm( );
                $this -> render('resetPassword', array('model' => $model, 'url' => $url, 'token' => $_GET['token'], 'title' => $title)); 
            } else {
                Yii::app()->user->setFlash('error', 'Error in your confirmation. try again.');
                $this -> render('requestResetPassword', array('model' => $model, 'url' => $url, 'title' => $title)); 
            }

        } else if( isset( $_POST['Confirmation']['username'] ) ) {

            $model -> username = $_POST['Confirmation']['username'];
            if( $model -> validate() ) {
                $user =  OrganizationUser::model() -> findByAttributes( array( 'username' => $model -> username ) );
                $user -> sendPasswordResetLink();

                $flashMesage = Yii::t('reset_password', 'Please check your email for instructions on how to change your password');
                Yii::app()->user->setFlash('success', $flashMesage);
            }

            $this -> render('requestResetPassword', array(
                'model' => $model, 
                'url'   => $url, 
                'title' => $title
            ));

        } else if( isset( $_POST['ResetPasswordForm'] ) AND isset( $_POST['token'] ) ) {

            $model  =  new ResetPasswordForm();
            $model -> attributes = $_POST['ResetPasswordForm'];
            $user   = OrganizationUser::model()->findByAttributes( array( 'perishable_token' => $_POST['token'] ) );

            if( $model->validate() && $user) {

                $user->saveAttributes( array('password' => Hash::hashPassword($model->password), 'forget_password_expiration' => date("Y-m-d H:i:s", strtotime("-1 hours") ) ) );

                Yii::app()->user->setFlash('success', Yii::t('reset_password', 'Password successfully updated') );
                $this->redirect('/admin/default/login');
            }

            $this -> render('resetPassword', array(
                'model' => $model, 
                'url'   => $url, 
                'token' => $_POST['token'], 
                'title' => $title 
            )); 

        } else {
            $this -> render('requestResetPassword', array(
                'model' => $model,
                'url'   => $url, 
                'title' => $title
            ));
        }


        
    }
}