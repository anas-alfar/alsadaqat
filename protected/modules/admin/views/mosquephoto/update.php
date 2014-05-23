<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Photos')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MosquePhoto', 'List Mosque Photo'),'url'=>array('index')),
	array('label'=>Yii::t('MosquePhoto', 'Create Mosque Photo'),'url'=>array('create')),
	array('label'=>Yii::t('MosquePhoto', 'View Mosque Photo'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MosquePhoto', 'Manage Mosque Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosquePhoto', 'Update Mosque Photo')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>