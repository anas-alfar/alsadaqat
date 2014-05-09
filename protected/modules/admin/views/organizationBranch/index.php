<?php
$this->breadcrumbs=array(
	'Organization Branches',
);

$this->menu=array(
	array('label'=>'Create OrganizationBranch','url'=>array('create')),
	array('label'=>'Manage OrganizationBranch','url'=>array('admin')),
);
?>

<h1>Organization Branches</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
