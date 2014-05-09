<?php
$this->breadcrumbs=array(
	'Beneficiaries',
);

$this->menu=array(
	array('label'=>'Create Beneficiary','url'=>array('create')),
	array('label'=>'Manage Beneficiary','url'=>array('admin')),
);
?>

<h1>Beneficiaries</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
