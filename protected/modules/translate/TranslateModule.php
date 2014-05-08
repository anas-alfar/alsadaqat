<?php

class TranslateModule extends CWebModule
{
    /**
     * the name of the translate component
     * change this in case you dont use the default name
     * */
    static $translateComponentId='translate';
	/**
	 * TranslateModule::init()
	 * 
	 * @return
	 */
	public function init(){
        $this->defaultController='Translate';
		$this->setImport(array(
            'translate.models.*',
            'translate.controllers.*',
            'translate.components.*',
        ));
		
		Yii::app()->user->loginUrl=array("/admin/default/login");
        return parent::init();
	}
    /**
     * get the translate component
     * 
     * @return MPTranslate
     */
    static function translator(){
        $component=Yii::app()->getComponent(self::$translateComponentId);
        if($component===null)
            throw new CException('Translate component must be defined');
        return $component;
    }
    static function __callStatic($method,$args){
        return call_user_func_array(array(self::getTranslateComponent(),$method),$args);
    }
    static function missingTranslation($event){
        return self::translator()->missingTranslation($event);
    }
    /**
     * translate some message using the module configuration
     * 
     * @param string $message
     * @param array $params
     * @return string translated message
     */
    static function t($message,$params=array()){
        $translator=self::translator();
        return Yii::t($translator->ID,$message,$params,'en','en');
    }

	public function beforeControllerAction($controller, $action)
		{
			if(parent::beforeControllerAction($controller, $action))
			{
				// this method is called before any module controller action is performed
				// you may place customized code here
				$route = $controller->id . '/' . $action->id;
	           // echo $route;
	           // $controller->layout = $this->layout;
/*
	            $publicPages = array(
	                'default/resetpassword',
	                'default/login',
	                'default/error',
	               
	            );*/

	            if (!$controller->isAdmin ){
	            	Yii::app()->user->returnUrl=array($controller->id.'/'.$action->id);            
	                Yii::app()->user->loginRequired();                
	            }
	            else
	                return true;
				return true;
			}
			else
				return false;
		}
	}