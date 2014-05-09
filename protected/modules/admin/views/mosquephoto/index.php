<?php
$this->breadcrumbs=array(
	'Mosque Photos',
);

$this->menu=array(
	array('label'=>'Create MosquePhoto','url'=>array('create')),
	array('label'=>'Manage MosquePhoto','url'=>array('admin')),
);
?>

<h1>Mosque Photos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
