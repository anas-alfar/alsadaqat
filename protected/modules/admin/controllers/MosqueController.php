<?php

class MosqueController extends RController {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '/layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array(
			'rights', // perform access control for CRUD operations

		);
	}

	public function allowedActions() {
		// return 'create';
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionCreateGallery($id) {
		$model = $this->loadModel($id);

		if (!$model->gallery_id) {
			$gallery = new Gallery();
			//$gallery->type        = 'archive';
			$gallery->name        = true;
			$gallery->description = true;
			$gallery->versions    = array(
				'small'   => array(
					'resize' => array(200, null),
				),
				'medium'  => array(
					'resize' => array(800, null),
				)
			);
			$gallery->save();

			$model->gallery_id = $gallery->id;
			$model->save();
		}
		$this->redirect(array('view', 'id' => $model->id));

	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this->render('view', array(
				'model' => $this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new Mosque;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Mosque'])) {
			$model->attributes = $_POST['Mosque'];
			if ($model->save()) {
				$this->checkImageUploaded($model, 'image', 'preview');

				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('create', array(
				'model' => $model,
			));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model        = $this->loadModel($id);
		$this->cities = City::model()->getOptions($model->country_id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['Mosque'])) {
			$model->attributes = $_POST['Mosque'];
			if ($model->save()) {
				$this->checkImageUploaded($model, 'image', 'preview');

				$this->redirect(array('view', 'id' => $model->id));
			}
		}

		$this->render('update', array(
				'model' => $model,
			));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			//$this->loadModel($id)->delete();
			$model = $this->loadModel($id);

            if ( $model->gallery )
                $model->gallery->delete();

            $model->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl'])?$_POST['returnUrl']:array('admin'));
			}
		} else {

			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		$dataProvider = new CActiveDataProvider('Mosque');
		$this->render('index', array(
				'dataProvider' => $dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new Mosque('search');
		$model->unsetAttributes();// clear any default values
		if (isset($_GET['Mosque'])) {
			$model->attributes = $_GET['Mosque'];
		}

		$this->render('admin', array(
				'model' => $model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = Mosque::model()->findByPk($id);
		if ($model === null) {
			throw new CHttpException(404, 'The requested page does not exist.');
		}

		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'mosque-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionReport($id, $isPDF = false) {
		$this->layout = '/layouts/PDFColumn';

		$model = $this->loadModel($id);

		$photoGallery = $this->getGallaryPhotosProviderByGalleryId($model->gallery_id);
		$photoGallery = $this->returnGallaryPhotosInArrayByGallaryPhotosProvider($photoGallery);

		if ($isPDF == false) {
			$this->render('report', array(
					'model'        => $model,
					'photoGallery' => $photoGallery,
				));
		} else {

			Yii::import('application.vendors.phpwkhtmltopdf.*');

			require_once ('WkHtmlToPdf.php');

			spl_autoload_unregister(array('YiiBase', 'autoload'));
			spl_autoload_register(array('YiiBase', 'autoload'));

			$webRoot = Yii::app()->params['webroot'];
			$rand    = rand(1, 9999).$model->id;
			$html    = $webRoot.'reports/temp/'.$rand.time().$model->id.'.html';
			$PDF     = $webRoot.'reports/temp/'.$rand.time().$model->id.'.pdf';
			$handle  = fopen($html, 'w') or die('Cannot open file:  '.$html);//implicitly creates

			$ccc = new Controller('context');
			fwrite($handle, $ccc->renderInternal(
					Yii::getPathOfAlias('application.modules.admin.views.mosque').'/'.'report.php',
					array('model' => $model, 'photoGallery' => $photoGallery, ), true
				)
			);

			$HTMLToPDF                 = new WkHtmlToPdf;
			$HTMLToPDF->ignoreWarnings = true;
			$HTMLToPDF->addPage($html);

			if (!$HTMLToPDF->saveAs($PDF)) {
				throw new Exception('Could not create PDF: '.$HTMLToPDF->getError());
			}

			copy($PDF, $webRoot.'reports/mosque_'.$model->id.'.pdf');

		}

	}

	public function returnGallaryPhotosInArrayByGallaryPhotosProvider($photoGallery) {

		$finalArray  = array();
		$photosArray = array();

		foreach ($photoGallery->getData() as $key => $value) {
			$photosArray['label']   = $value->name;
			$photosArray['caption'] = $value->description;
			$photosArray['image']   = $this->getImageByCase($value->id, $value->gallery_id, '', true);
			array_push($finalArray, $photosArray);
		}
		return $finalArray;
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	/*public function actionGeneratePDF($id)
{
Yii::import('application.vendors.phpwkhtmltopdf.*');

require_once('WkHtmlToPdf.php');

spl_autoload_unregister( array( 'YiiBase', 'autoload' ) );
spl_autoload_register(   array( 'YiiBase', 'autoload' ) );

$model = $this->loadModel($id);
$photoGallery = $this -> getGallaryPhotosProviderByGalleryId( $model->gallery_id );
$photoGallery = $this -> returnGallaryPhotosInArrayByGallaryPhotosProvider( $photoGallery );

$webRoot                  = Yii::app() -> params['webroot'];
$rand                     = rand(1, 9999).$model->id;
$html                  = $webRoot.'reports/temp/'.$rand.time().$model->id.'.html';
$PDF               = $webRoot.'reports/temp/'.$rand.time().$model->id.'.pdf';
$handle                   = fopen($html, 'w') or die('Cannot open file:  '.$html); //implicitly creates

$ccc = new Controller('context');
//Yii::app()->language = 'en';
fwrite($handle,  $ccc->renderInternal(
Yii::getPathOfAlias('application.modules.admin.views.mosque').'/'.'report.php',
array( 'model' => $model, 'photoGallery'  => $photoGallery, ), true
)
);

$pdf  = new WkHtmlToPdf;
$pdf -> ignoreWarnings = true;
$pdf -> addPage($html);

if( ! $pdf->saveAs( $PDF ) )
throw new Exception('Could not create PDF: '.$pdf->getError());

copy($PDF, $webRoot . 'reports/mosque_' . $model->id . '.pdf');
//$output = shell_exec( " cp  ".$PDF."  ". $final_cv_path);
}*/

}
