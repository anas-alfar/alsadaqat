<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Agents')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'List Agent'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueAgent', 'Manage Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'Create Agent')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>