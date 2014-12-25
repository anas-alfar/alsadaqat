<?php
$this->breadcrumbs = array(
	Yii::t('app', 'Events')=> array('index'),
	$model->title,
);

$this->menu = array(
	array('label' => Yii::t('Event', 'List Event'), 'url' => array('index')),
	array('label' => Yii::t('Event', 'Create Event'), 'url' => array('create')),
	array('label' => Yii::t('Event', 'Update Event'), 'url' => array('update', 'id' => $model->id)),
	array('label' => Yii::t('Event', 'Delete Event'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label' => Yii::t('Event', 'Manage Event'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('Event', 'View Event')?> #<?php echo $model->id;?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'       => $model,
		'attributes' => array(
			'id',
			'organization_id',
			'title',
			'description',
			'number_of_days',
			'event_type_id',
			array('name' => 'country_id', 'value' => array($model, 'countryFilter')),
			'city_id',
			'address',
			'status',
			'start_at',
			'end_at',
			'published',
			'approved',
			'owner_id',
			'created_at',
			'updated_at',
			'notes',
			'options',
		),
	));?>



<h2><?php echo Yii::t('gallery', 'Event gallery')?></h2>
<?php
if ($model->galleryBehavior->getGallery() === null) {
	echo '<p>'.Yii::t('gallery', 'Before add photos to '.Yii::t('gallery', 'Event gallery').', you need to create gallery').'<b> '.$model->name.'</b></p>';
	echo '<p>'.Yii::t('gallery', 'To create gallery, go to').' '.CHtml::link(Yii::t('Event', 'Manage Event'), array('admin')).' or '.CHtml::link(Yii::t('gallery', 'Create Gallery'), array('createGallery', 'id' => $model->id));
} else {
	$this->widget('GalleryManager', array(
			'gallery'         => $model->galleryBehavior->getGallery(),
			'controllerRoute' => '/admin/gallery', //route to gallery controller
		));
}
?>