<?php
$this->breadcrumbs=array(
	'Mosque Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MosqueType','url'=>array('index')),
	array('label'=>'Create MosqueType','url'=>array('create')),
	array('label'=>'View MosqueType','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MosqueType','url'=>array('admin')),
);
?>

<h1>Update MosqueType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>