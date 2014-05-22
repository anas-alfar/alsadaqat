<?php
$this->breadcrumbs=array(
	'Event Activities'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List EventActivity','url'=>array('index')),
	array('label'=>'Create EventActivity','url'=>array('create')),
	array('label'=>'View EventActivity','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EventActivity','url'=>array('admin')),
);
?>

<h1>Update EventActivity <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>