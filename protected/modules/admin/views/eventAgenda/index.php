<?php
$this->breadcrumbs=array(
	'Event Agendas',
);

$this->menu=array(
	array('label'=>'Create EventAgenda','url'=>array('create')),
	array('label'=>'Manage EventAgenda','url'=>array('admin')),
);
?>

<h1>Event Agendas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
