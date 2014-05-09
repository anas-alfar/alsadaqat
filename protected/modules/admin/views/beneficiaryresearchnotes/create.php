<?php
$this->breadcrumbs=array(
	'Beneficiary Research Notes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryResearchNotes','url'=>array('index')),
	array('label'=>'Manage BeneficiaryResearchNotes','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryResearchNotes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>