<?php
$this->breadcrumbs=array(
	'Beneficiary Family Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryFamilyMembers','url'=>array('index')),
	array('label'=>'Manage BeneficiaryFamilyMembers','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryFamilyMembers</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>