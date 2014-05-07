<?php
$this->breadcrumbs=array(
	'Organization Types',
);

$this->menu=array(
	array('label'=>'Create OrganizationType','url'=>array('create')),
	array('label'=>'Manage OrganizationType','url'=>array('admin')),
);
?>

<h1>Organization Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
