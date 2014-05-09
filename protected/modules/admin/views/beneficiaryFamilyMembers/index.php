<?php
$this->breadcrumbs=array(
	'Beneficiary Family Members',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryFamilyMembers','url'=>array('create')),
	array('label'=>'Manage BeneficiaryFamilyMembers','url'=>array('admin')),
);
?>

<h1>Beneficiary Family Members</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
