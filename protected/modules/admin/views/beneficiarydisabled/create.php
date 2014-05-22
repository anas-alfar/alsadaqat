<?php
$this->breadcrumbs=array(
	'Beneficiary Disableds'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryDisabled','url'=>array('index')),
	array('label'=>'Manage BeneficiaryDisabled','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryDisabled</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>