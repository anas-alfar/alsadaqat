<?php
$this->breadcrumbs=array(
	'Beneficiary Teachers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryTeacher','url'=>array('index')),
	array('label'=>'Manage BeneficiaryTeacher','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryTeacher</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>