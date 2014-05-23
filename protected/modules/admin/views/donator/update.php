<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Donators')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Donator', 'List Donator'),'url'=>array('index')),
	array('label'=>Yii::t('Donator', 'Create Donator'),'url'=>array('create')),
	array('label'=>Yii::t('Donator', 'View Donator'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Donator', 'Manage Donator'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Donator', 'Update Donator')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>