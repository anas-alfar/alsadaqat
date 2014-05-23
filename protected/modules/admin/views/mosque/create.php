<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'List Mosque'),'url'=>array('index')),
	array('label'=>Yii::t('Mosque', 'Manage Mosque'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Mosque', 'Create Mosque')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>