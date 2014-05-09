<?php
$this->breadcrumbs=array(
	'Beneficiary Relations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BeneficiaryRelation','url'=>array('index')),
	array('label'=>'Manage BeneficiaryRelation','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryRelation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>