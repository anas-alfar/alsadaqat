<?php
$this->breadcrumbs=array(
	'Beneficiary Orphans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryOrphan','url'=>array('index')),
	array('label'=>'Manage BeneficiaryOrphan','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryOrphan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>