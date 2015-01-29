<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Well Types')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('WellType', 'List Well Type'),'url'=>array('index')),
	array('label'=>Yii::t('WellType', 'Create Well Type'),'url'=>array('create')),
	array('label'=>Yii::t('WellType', 'View Well Type'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('WellType', 'Manage Well Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('WellType', 'Update Well Type')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>