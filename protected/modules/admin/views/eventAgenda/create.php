<?php
$this->breadcrumbs=array(
	'Event Agendas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EventAgenda','url'=>array('index')),
	array('label'=>'Manage EventAgenda','url'=>array('admin')),
);
?>

<h1>Create EventAgenda</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>