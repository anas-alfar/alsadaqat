<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committee Users',
);

$this->menu=array(
	array('label'=>'Create OrganizationBranchCountryCommitteeUser','url'=>array('create')),
	array('label'=>'Manage OrganizationBranchCountryCommitteeUser','url'=>array('admin')),
);
?>

<h1>Organization Branch Country Committee Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
