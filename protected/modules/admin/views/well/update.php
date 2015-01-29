<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Wells')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Well', 'List Well'),'url'=>array('index')),
	array('label'=>Yii::t('Well', 'Create Well'),'url'=>array('create')),
	array('label'=>Yii::t('Well', 'View Well'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Well', 'Manage Well'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Well', 'Update Well')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>