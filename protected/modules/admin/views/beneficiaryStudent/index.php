<?php
$this->breadcrumbs=array(
	'Beneficiary Students',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryStudent','url'=>array('create')),
	array('label'=>'Manage BeneficiaryStudent','url'=>array('admin')),
);
?>

<h1>Beneficiary Students</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
