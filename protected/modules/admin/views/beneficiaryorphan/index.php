<?php
$this->breadcrumbs=array(
	'Beneficiary Orphans',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryOrphan','url'=>array('create')),
	array('label'=>'Manage BeneficiaryOrphan','url'=>array('admin')),
);
?>

<h1>Beneficiary Orphans</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
