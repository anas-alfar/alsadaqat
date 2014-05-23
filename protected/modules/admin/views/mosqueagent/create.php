<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Agents')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'List Mosque Agent'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueAgent', 'Manage Mosque Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'Create Mosque Agent')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>