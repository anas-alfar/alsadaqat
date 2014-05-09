<?php
$this->breadcrumbs=array(
	'Event Photos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EventPhoto','url'=>array('index')),
	array('label'=>'Create EventPhoto','url'=>array('create')),
	array('label'=>'View EventPhoto','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EventPhoto','url'=>array('admin')),
);
?>

<h1>Update EventPhoto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>