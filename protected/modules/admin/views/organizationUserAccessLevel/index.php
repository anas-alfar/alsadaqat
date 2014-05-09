<?php
$this->breadcrumbs=array(
	'Organization User Access Levels',
);

$this->menu=array(
	array('label'=>'Create OrganizationUserAccessLevel','url'=>array('create')),
	array('label'=>'Manage OrganizationUserAccessLevel','url'=>array('admin')),
);
?>

<h1>Organization User Access Levels</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
