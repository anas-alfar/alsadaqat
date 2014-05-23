<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Types')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MosqueType', 'List Mosque Type'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueType', 'Create Mosque Type'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueType', 'View Mosque Type'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MosqueType', 'Manage Mosque Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueType', 'Update Mosque Type')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>