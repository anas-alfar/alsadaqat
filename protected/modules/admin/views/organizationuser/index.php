<?php
$this->breadcrumbs=array(
	'Organization Users',
);

$this->menu=array(
	array('label'=>'Create OrganizationUser','url'=>array('create')),
	array('label'=>'Manage OrganizationUser','url'=>array('admin')),
);
?>

<h1>Organization Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
