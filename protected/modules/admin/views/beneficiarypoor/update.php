<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Poors')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPoor', 'List Beneficiary Poor'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Create Beneficiary Poor'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPoor', 'View Beneficiary Poor'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryPoor', 'Manage Beneficiary Poor'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPoor', 'Update Beneficiary Poor')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>