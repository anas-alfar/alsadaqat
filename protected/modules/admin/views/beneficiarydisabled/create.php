<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List Beneficiary Disabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage Beneficiary Disabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryDisabled', 'Create Beneficiary Disabled')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>