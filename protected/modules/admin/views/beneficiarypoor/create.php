<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Poors')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPoor', 'List Beneficiary Poor'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Manage Beneficiary Poor'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPoor', 'Create Beneficiary Poor')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>