<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Types')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueType', 'List Mosque Type'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueType', 'Manage Mosque Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueType', 'Create Mosque Type')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>