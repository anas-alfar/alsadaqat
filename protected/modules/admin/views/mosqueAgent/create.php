<?php
$this->breadcrumbs=array(
	'Mosque Agents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MosqueAgent','url'=>array('index')),
	array('label'=>'Manage MosqueAgent','url'=>array('admin')),
);
?>

<h1>Create MosqueAgent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>