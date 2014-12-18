<?php

class DefaultController extends RController
{
    public function actionIndex()
    {
        //var_dump( Yii::app()->user->isSuperuser );  // return true if superuser => admin
        $this->render('index');
    }

    public function actionError()
    {
        if($error=Yii::app()->errorHandler->error)
        {
            if(Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $this->layout = 'column1';

        $model=new AdminLoginForm;

        // if it is ajax validation request
        if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if(isset($_POST['AdminLoginForm']))
        {
            $model->attributes=$_POST['AdminLoginForm'];
            
            // validate user input and redirect to the previous page if valid
            if($model->validate() && $model->login()) {
                $this->redirect('/admin/default');
            }
                
        }
        // display the login form
        $this->render('login',array('model'=>$model));
    }
    
    
    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect('/admin/default/login');
    }
}