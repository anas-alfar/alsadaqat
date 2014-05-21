<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organizations') => array('index'),
	$model->name=>array('view','id'=> $model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=> Yii::t('organization', 'List Organization'), 'url'=>array('index')),
	array('label'=> Yii::t('organization', 'Create Organization'), 'url'=>array('create')),
	array('label'=> Yii::t('organization', 'View Organization'), 'url'=>array('view','id'=>$model->id)),
	array('label'=> Yii::t('organization', 'Manage Organization'), 'url'=>array('admin')),
);
?>

<h1><?php Yii::t('organization', 'Update Organization') ?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>