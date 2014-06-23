<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	//public $layout='//layouts/column1';
	public $layout=null;
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
    
    private $isAdmin            = false;
    //private $isCircleManager    = false;
    //private $isLeader           = false;
    //private $isMember           = false;
    private $isGuest            = false;


    protected $currentLanguage = null;
    protected $direction = null;
    protected $languageSwitcher = null;
    protected $oppositeCurrentLanguage = null;

    public function init() {
            
        $this -> currentLanguage   = 'ar';
        $this -> direction         = 'rtl';
        $this -> languageSwitcher  = 'English';
        $this -> oppositeCurrentLanguage= 'en';

        if ( Yii::app()->language == 'en' ) {
            $this -> currentLanguage   = 'en'; 
            $this -> direction         = 'ltr';
            $this -> languageSwitcher  = 'عربي';
            $this -> oppositeCurrentLanguage= 'ar';
        }
    }


    /*public function getIsMember() {
        $this -> isMember = !Yii::app()->user->getIsGuest() && Yii::app()->user->role == 'Team Member';
        return $this->isMember;
    }

    public function getIsLeader() {
        $this -> isLeader = !Yii::app()->user->getIsGuest() && Yii::app()->user->role == 'Team Leader';
        return $this->isLeader;
    }

    public function getIsCircleManager() {
        $this -> isCircleManager = !Yii::app()->user->getIsGuest() && Yii::app()->user->role == 'Circle Manager';
        return $this->isCircleManager;
    }*/

    public function getIsAdmin() {
        $this -> isAdmin = !Yii::app()->user->getIsGuest() && Yii::app()->user->role == 'Super Admin';
        return $this->isAdmin;
    }
    
    public function getIsGuest() {
        $this -> isGuest = Yii::app()->user->getIsGuest() ;
        return $this->isGuest;
    }

    public function checkImageUploaded($model, $inputFileName = 'image', $behaviorName = 'preview') {
        if ( isset($model) AND !empty($model->id) ) {
            if( isset($_FILES[get_class($model)]['name'][$inputFileName]) AND !empty($_FILES[get_class($model)]['name'][$inputFileName]) ) {

                $img = CUploadedFile::getInstance($model, $inputFileName);

                if( isset($img) AND !empty($img) ) {
                    $model = $this->loadModel( $model->id );

                    $model->$behaviorName->setImage( $img->getTempName() );

                    // if ( $inputFileName == 'image' ) {
                        // $model->preview->setImage( $img->getTempName() );
                    // } else {
                        // $model->passpor->setImage( $img->getTempName() );
                    // }
                }
            } else
                return false;
        }
    }
    
}