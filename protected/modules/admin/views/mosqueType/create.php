<?php
$this->breadcrumbs=array(
	'Mosque Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MosqueType','url'=>array('index')),
	array('label'=>'Manage MosqueType','url'=>array('admin')),
);
?>

<h1>Create MosqueType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>