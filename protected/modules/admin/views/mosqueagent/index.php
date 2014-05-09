<?php
$this->breadcrumbs=array(
	'Mosque Agents',
);

$this->menu=array(
	array('label'=>'Create MosqueAgent','url'=>array('create')),
	array('label'=>'Manage MosqueAgent','url'=>array('admin')),
);
?>

<h1>Mosque Agents</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
