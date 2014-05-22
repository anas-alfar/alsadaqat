<?php
$this->breadcrumbs=array(
	'Beneficiary Students'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List BeneficiaryStudent','url'=>array('index')),
	array('label'=>'Manage BeneficiaryStudent','url'=>array('admin')),
);
?>

<h1>Create BeneficiaryStudent</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>