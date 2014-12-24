<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	//public $layout='//layouts/column1';
	public $layout = null;
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu = array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs = array();
	public $cities      = array();

	private $isAdmin = false;
	private $isGuest = false;

	protected $currentLanguage         = null;
	protected $direction               = null;
	protected $languageSwitcher        = null;
	protected $oppositeCurrentLanguage = null;

	public function init() {

		$this->currentLanguage         = 'ar';
		$this->direction               = 'rtl';
		$this->languageSwitcher        = 'English';
		$this->oppositeCurrentLanguage = 'en';

		if (Yii::app()->language == 'en') {
			$this->currentLanguage         = 'en';
			$this->direction               = 'ltr';
			$this->languageSwitcher        = 'عربي';
			$this->oppositeCurrentLanguage = 'ar';
		}
	}

	public function getIsAdmin() {
		$this->isAdmin = !Yii::app()->user->getIsGuest() && Yii::app()->user->role == 'Super Admin';
		return $this->isAdmin;
	}
	//
	public function getIsGuest() {
		$this->isGuest = Yii::app()->user->getIsGuest();
		return $this->isGuest;
	}

	public function checkImageUploaded($model, $inputFileName = 'image', $behaviorName = 'preview') {
		if (isset($model) AND !empty($model->id)) {
			if (isset($_FILES[get_class($model)]['name'][$inputFileName]) AND !empty($_FILES[get_class($model)]['name'][$inputFileName])) {

				$img = CUploadedFile::getInstance($model, $inputFileName);

				if (isset($img) AND !empty($img)) {
					$model = $this->loadModel($model->id);

					$model->$behaviorName->setImage($img->getTempName());

					// if ( $inputFileName == 'image' ) {
					// $model->preview->setImage( $img->getTempName() );
					// } else {
					// $model->passpor->setImage( $img->getTempName() );
					// }
				}
			} else {

				return false;
			}
		}
	}

	public function getGallaryPhotosProviderByGalleryId($galleryId) {
		$gallery = $galleryId;

		if (!$galleryId) {
			$gallery = 0;
		}

		$criteria = new CDbCriteria;
		$criteria->compare('gallery_id', $gallery);
		$criteria->order = 'rank DESC';

		return new CActiveDataProvider(GalleryPhoto::model(), array('criteria' => $criteria));
	}

	public function getImageByCase($imageId, $gallery_id, $size = 'big', $isPDF = false) {

		$root = ($isPDF)?Yii::app()->params['webroot']:'';
		$hash = substr(sha1($gallery_id), 0, 10).DIRECTORY_SEPARATOR.substr(sha1($gallery_id), -10).'/'.$gallery_id%100;
		$path = 'galleries'.DIRECTORY_SEPARATOR.$gallery_id.DIRECTORY_SEPARATOR.$hash;

		$imagePath = $path.DIRECTORY_SEPARATOR.$imageId.$size.'.jpg';
		$fileExist = file_exists(Yii::app()->params['webroot'].$imagePath);
		$src       = ($fileExist)?$root.$imagePath:false;

		return $src;
	}

}