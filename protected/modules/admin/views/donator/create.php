<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Donators')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Donator', 'List Donator'),'url'=>array('index')),
	array('label'=>Yii::t('Donator', 'Manage Donator'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Donator', 'Create Donator')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>