<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Homes')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryHome', 'List Beneficiary Home'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryHome', 'Manage Beneficiary Home'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryHome', 'Create Beneficiary Home')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>