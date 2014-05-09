<?php
$this->breadcrumbs=array(
	'Organization Branch Countries',
);

$this->menu=array(
	array('label'=>'Create OrganizationBranchCountry','url'=>array('create')),
	array('label'=>'Manage OrganizationBranchCountry','url'=>array('admin')),
);
?>

<h1>Organization Branch Countries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
