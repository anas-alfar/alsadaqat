<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Tasks')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Task', 'List Task'),'url'=>array('index')),
	array('label'=>Yii::t('Task', 'Create Task'),'url'=>array('create')),
	array('label'=>Yii::t('Task', 'View Task'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Task', 'Manage Task'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Task', 'Update Task')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>