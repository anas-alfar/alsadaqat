<?php
$this->breadcrumbs=array(
	'Beneficiary Poors',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryPoor','url'=>array('create')),
	array('label'=>'Manage BeneficiaryPoor','url'=>array('admin')),
);
?>

<h1>Beneficiary Poors</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
