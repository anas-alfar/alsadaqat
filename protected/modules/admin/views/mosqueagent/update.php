<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Agents')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'List Mosque Agent'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueAgent', 'Create Mosque Agent'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueAgent', 'View Mosque Aent'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MosqueAgent', 'Manage Mosque Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'Update Mosque Agent')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>