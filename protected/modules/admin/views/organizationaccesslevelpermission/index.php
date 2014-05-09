<?php
$this->breadcrumbs=array(
	'Organization Access Level Permissions',
);

$this->menu=array(
	array('label'=>'Create OrganizationAccessLevelPermission','url'=>array('create')),
	array('label'=>'Manage OrganizationAccessLevelPermission','url'=>array('admin')),
);
?>

<h1>Organization Access Level Permissions</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
