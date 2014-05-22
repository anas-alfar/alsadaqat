<?php
$this->breadcrumbs=array(
	'Beneficiary Homes'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryHome','url'=>array('index')),
	array('label'=>'Manage BeneficiaryHome','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryHome</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>