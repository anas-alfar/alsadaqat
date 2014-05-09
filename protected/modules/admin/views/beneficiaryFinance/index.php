<?php
$this->breadcrumbs=array(
	'Beneficiary Finances',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryFinance','url'=>array('create')),
	array('label'=>'Manage BeneficiaryFinance','url'=>array('admin')),
);
?>

<h1>Beneficiary Finances</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
