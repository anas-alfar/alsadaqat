<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Well Types')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('WellType', 'List Well Type'),'url'=>array('index')),
	array('label'=>Yii::t('WellType', 'Manage Well Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('WellType', 'Create Well Type')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>