<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Cities')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('City', 'List City'),'url'=>array('index')),
	array('label'=>Yii::t('City', 'Create City'),'url'=>array('create')),
	array('label'=>Yii::t('City', 'View City'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('City', 'Manage City'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('City', 'Update City')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>