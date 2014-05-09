<?php
$this->breadcrumbs=array(
	'Beneficiary Disableds',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryDisabled','url'=>array('create')),
	array('label'=>'Manage BeneficiaryDisabled','url'=>array('admin')),
);
?>

<h1>Beneficiary Disableds</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
