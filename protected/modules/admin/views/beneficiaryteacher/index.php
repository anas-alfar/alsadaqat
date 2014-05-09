<?php
$this->breadcrumbs=array(
	'Beneficiary Teachers',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryTeacher','url'=>array('create')),
	array('label'=>'Manage BeneficiaryTeacher','url'=>array('admin')),
);
?>

<h1>Beneficiary Teachers</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
