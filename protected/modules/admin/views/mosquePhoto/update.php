<?php
$this->breadcrumbs=array(
	'Mosque Photos'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MosquePhoto','url'=>array('index')),
	array('label'=>'Create MosquePhoto','url'=>array('create')),
	array('label'=>'View MosquePhoto','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MosquePhoto','url'=>array('admin')),
);
?>

<h1>Update MosquePhoto <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>