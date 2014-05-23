<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Orphans')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryOrphan', 'List Beneficiary Orphan'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryOrphan', 'Manage Beneficiary Orphan'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryOrphan', 'Create Beneficiary Orphan')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>