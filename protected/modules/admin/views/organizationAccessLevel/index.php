<?php
$this->breadcrumbs=array(
	'Organization Access Levels',
);

$this->menu=array(
	array('label'=>'Create OrganizationAccessLevel','url'=>array('create')),
	array('label'=>'Manage OrganizationAccessLevel','url'=>array('admin')),
);
?>

<h1>Organization Access Levels</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
