<?php

class AdminModule extends CWebModule
{
	public function init()
	{
	    $this->layoutPath = Yii::getPathOfAlias('admin.views.layouts');
        $this->layout     = 'column2';
        Yii::app()->theme = 'abound'; 
        
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
        
        Yii::app()->user->loginUrl = array("/admin/default/login");
        
        Yii::app()->setComponents(array(
            'errorHandler'=>array(
                'errorAction'=>'admin/default/error'
                ),
        ));
        
        
	}

    public function beforeControllerAction($controller, $action)
    {
        if(parent::beforeControllerAction($controller, $action))
        {
            $route = $controller->id . '/' . $action->id;
            $publicPages = array(
                'default/resetpassword',
                'default/login',
                'default/error',
            );

            if ($controller->isGuest  && !in_array($route, $publicPages)){
                Yii::app()->user->returnUrl=array($controller->id.'/'.$action->id);            
                Yii::app()->user->loginRequired();                
            }
            else
                return true;
            
            // this method is called before any module controller action is performed
            // you may place customized code here
            return true;
        }
        else
            return false;
    }
}
