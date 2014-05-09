<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committees',
);

$this->menu=array(
	array('label'=>'Create OrganizationBranchCountryCommittee','url'=>array('create')),
	array('label'=>'Manage OrganizationBranchCountryCommittee','url'=>array('admin')),
);
?>

<h1>Organization Branch Country Committees</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
