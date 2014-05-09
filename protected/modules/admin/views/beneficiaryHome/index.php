<?php
$this->breadcrumbs=array(
	'Beneficiary Homes',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryHome','url'=>array('create')),
	array('label'=>'Manage BeneficiaryHome','url'=>array('admin')),
);
?>

<h1>Beneficiary Homes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
