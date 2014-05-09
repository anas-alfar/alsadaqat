<?php
$this->breadcrumbs=array(
	'Event Activities',
);

$this->menu=array(
	array('label'=>'Create EventActivity','url'=>array('create')),
	array('label'=>'Manage EventActivity','url'=>array('admin')),
);
?>

<h1>Event Activities</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
