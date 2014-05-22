<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List BeneficiaryDisabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Create BeneficiaryDisabled'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'View BeneficiaryDisabled'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage BeneficiaryDisabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryDisabled', 'Update BeneficiaryDisabled')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>