<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Wells')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('Well', 'List Well'),'url'=>array('index')),
	array('label'=>Yii::t('Well', 'Create Well'),'url'=>array('create')),
	array('label'=>Yii::t('Well', 'Update Well'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Well', 'Delete Well'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('Well', 'Manage Well'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Well', 'View Well')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'contract_date',
		'contract_photo_path',
		//'construction_progress',
        array(
            'name'  => 'construction_progress',
            'type'  => 'raw',
            'value' => $model->construction_progress . ' ' .TbHtml::animatedProgressBar( $model->construction_progress, array('color' => TbHtml::PROGRESS_COLOR_SUCCESS) )
        ),
        'real_construction_cost',
        array(
            'name'  => 'donator_id',
            'value' => $model->donator->fullname 
        ),
        array(
            'name'  => 'agent_id',
            'value' => $model->agent->company_name 
        ),
        array(
            'name'  => 'well_type_id',
            'value' => $model->wellType->name 
        ),
		array(
            'name'  => 'country_id',
            'value' => array($model, 'countryFilter')
        ),
        array(
            'name'  => 'city_id',
            'value' => Yii::app()->language == 'en' ? $model->city->name : $model->city->name_ar 
        ),
        array(
            'name'  => 'owner_id',
            'value' => $model->owner->fullname 
        ),
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>



<h2><?php echo Yii::t('gallery', 'Well gallery')?></h2>
<?php
if ($model->galleryBehavior->getGallery() === null) {
    echo '<p>' . Yii::t('gallery', 'Before add photos to '.Yii::t('gallery', 'Well gallery').', you need to create gallery') . '<b> '. $model->name.'</b></p>';
    echo '<p>' . Yii::t('gallery', 'To create gallery, go to') . ' ' . CHtml::link( Yii::t('Well', 'Manage Well'), array('admin') ) . ' or ' . CHtml::link( Yii::t('gallery', 'Create Gallery'), array('createGallery', 'id' => $model->id) ) ;
} else {
    $this->widget('GalleryManager', array(
        'gallery' => $model->galleryBehavior->getGallery(),
        'controllerRoute' => '/admin/gallery', //route to gallery controller
    ));
}
?>