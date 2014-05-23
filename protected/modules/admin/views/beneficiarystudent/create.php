<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Students')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudent', 'List Beneficiary Student'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryStudent', 'Manage Beneficiary Student'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryStudent', 'Create Beneficiary Student')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>