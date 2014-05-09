<?php
$this->breadcrumbs=array(
	'Mosques'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Mosque','url'=>array('index')),
	array('label'=>'Create Mosque','url'=>array('create')),
	array('label'=>'View Mosque','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Mosque','url'=>array('admin')),
);
?>

<h1>Update Mosque <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>