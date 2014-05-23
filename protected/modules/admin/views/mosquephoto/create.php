<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Photos')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MosquePhoto', 'List Mosque Photo'),'url'=>array('index')),
	array('label'=>Yii::t('MosquePhoto', 'Manage Mosque Photo'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosquePhoto', 'Create Mosque Photo')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>