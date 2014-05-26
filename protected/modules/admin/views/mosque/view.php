<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'List Mosque'),'url'=>array('index')),
	array('label'=>Yii::t('Mosque', 'Create Mosque'),'url'=>array('create')),
	array('label'=>Yii::t('Mosque', 'Update Mosque'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Mosque', 'Delete Mosque'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Mosque', 'Manage Mosque'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Mosque', 'View Mosque')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'address',
		'contract_date',
		'contract_photo_path',
		'construction_progress',
		'donator_id',
		'agent_id',
		'mosque_type_id',
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'city_id',
		'owner_id',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>



<h2><?php echo Yii::t('gallery', 'Mosque gallery')?></h2>
<?php
if ($model->galleryBehavior->getGallery() === null) {
    echo '<p>' . Yii::t('gallery', 'Before add photos to mosque gallery, you need to create gallery for this mosque') . '<b> '. $model->name.'</b></p>';
    echo '<p>' . Yii::t('gallery', 'To create gallery, go to') . ' ' . CHtml::link( Yii::t('Mosque', 'Manage Mosque'), array('admin') ) . ' or ' . CHtml::link( Yii::t('gallery', 'Create Gallery'), array('createGallery', 'id' => $model->id) ) ;
} else {
    $this->widget('GalleryManager', array(
        'gallery' => $model->galleryBehavior->getGallery(),
        'controllerRoute' => '/admin/gallery', //route to gallery controller
    ));
}
?>