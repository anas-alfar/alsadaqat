<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Finances')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFinance', 'List Beneficiary Finance'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Manage Beneficiary Finance'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFinance', 'Create Beneficiary Finance')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>