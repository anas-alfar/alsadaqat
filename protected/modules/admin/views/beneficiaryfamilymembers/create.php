<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Family Members')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'List Family Members'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Manage Family Members'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFamilyMembers', 'Create Beneficiary Family Members')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>