<?php
$this->breadcrumbs=array(
	'Beneficiary Finances'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryFinance','url'=>array('index')),
	array('label'=>'Manage BeneficiaryFinance','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryFinance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>