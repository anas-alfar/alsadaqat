<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List Beneficiary Disabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Create Beneficiary Disabled'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'View Beneficiary Disabled'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage Beneficiary Disabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryDisabled', 'Update Beneficiary Disabled')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>