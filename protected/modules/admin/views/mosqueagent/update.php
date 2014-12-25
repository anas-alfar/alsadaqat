<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Agents')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'List Agent'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueAgent', 'Create Agent'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueAgent', 'View Aent'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MosqueAgent', 'Manage Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'Update Agent')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>