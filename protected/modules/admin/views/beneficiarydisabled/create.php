<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List BeneficiaryDisabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage BeneficiaryDisabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryDisabled', 'Create BeneficiaryDisabled')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>