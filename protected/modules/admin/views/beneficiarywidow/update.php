<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Widows')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryWidow', 'List Beneficiary Widow'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryWidow', 'Create Beneficiary Widow'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryWidow', 'View Beneficiary Widow'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryWidow', 'Manage Beneficiary Widow'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryWidow', 'Update Beneficiary Widow')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>