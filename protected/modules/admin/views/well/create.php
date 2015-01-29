<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Wells')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Well', 'List Well'),'url'=>array('index')),
	array('label'=>Yii::t('Well', 'Manage Well'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Well', 'Create Well')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>