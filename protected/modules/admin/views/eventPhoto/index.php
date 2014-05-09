<?php
$this->breadcrumbs=array(
	'Event Photos',
);

$this->menu=array(
	array('label'=>'Create EventPhoto','url'=>array('create')),
	array('label'=>'Manage EventPhoto','url'=>array('admin')),
);
?>

<h1>Event Photos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
