<?php
$this->breadcrumbs=array(
	'Beneficiary Poors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryPoor','url'=>array('index')),
	array('label'=>'Manage BeneficiaryPoor','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryPoor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>