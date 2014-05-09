<?php
$this->breadcrumbs=array(
	'Donators',
);

$this->menu=array(
	array('label'=>'Create Donator','url'=>array('create')),
	array('label'=>'Manage Donator','url'=>array('admin')),
);
?>

<h1>Donators</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
