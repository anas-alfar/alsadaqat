<?php
$this->breadcrumbs=array(
    Yii::t('app', 'Beneficiary Widows')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryWidow', 'List Beneficiary Widow'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Manage Beneficiary Widow'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryWidow', 'Create Beneficiary Widow')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>