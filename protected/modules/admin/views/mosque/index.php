<?php
$this->breadcrumbs=array(
	'Mosques',
);

$this->menu=array(
	array('label'=>'Create Mosque','url'=>array('create')),
	array('label'=>'Manage Mosque','url'=>array('admin')),
);
?>

<h1>Mosques</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
