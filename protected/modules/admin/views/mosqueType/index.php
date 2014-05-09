<?php
$this->breadcrumbs=array(
	'Mosque Types',
);

$this->menu=array(
	array('label'=>'Create MosqueType','url'=>array('create')),
	array('label'=>'Manage MosqueType','url'=>array('admin')),
);
?>

<h1>Mosque Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
