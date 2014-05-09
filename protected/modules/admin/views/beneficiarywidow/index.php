<?php
$this->breadcrumbs=array(
	'Beneficiary Widows',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryWidow','url'=>array('create')),
	array('label'=>'Manage BeneficiaryWidow','url'=>array('admin')),
);
?>

<h1>Beneficiary Widows</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
