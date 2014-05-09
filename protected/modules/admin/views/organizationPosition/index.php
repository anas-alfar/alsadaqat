<?php
$this->breadcrumbs=array(
	'Organization Positions',
);

$this->menu=array(
	array('label'=>'Create OrganizationPosition','url'=>array('create')),
	array('label'=>'Manage OrganizationPosition','url'=>array('admin')),
);
?>

<h1>Organization Positions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
