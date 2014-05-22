<?php
$this->breadcrumbs=array(
	'Beneficiary Widows'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryWidow','url'=>array('index')),
	array('label'=>'Manage BeneficiaryWidow','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryWidow</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>