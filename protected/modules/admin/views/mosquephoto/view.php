<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Photos')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('MosquePhoto', 'List Mosque Photo'),'url'=>array('index')),
	array('label'=>Yii::t('MosquePhoto', 'Create Mosque Photo'),'url'=>array('create')),
	array('label'=>Yii::t('MosquePhoto', 'Update Mosque Photo'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MosquePhoto', 'Delete Mosque Photo'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('MosquePhoto', 'Manage Mosque Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosquePhoto', 'View Mosque Photo')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'mosque_id',
		'title',
		'size',
		'source_path',
		'source_url',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
