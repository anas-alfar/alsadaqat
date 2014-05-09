<?php
$this->breadcrumbs=array(
	'Beneficiary Student Classes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryStudentClass','url'=>array('index')),
	array('label'=>'Manage BeneficiaryStudentClass','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryStudentClass</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>