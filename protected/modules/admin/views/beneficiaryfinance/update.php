<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Finances')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFinance', 'List Beneficiary Finance'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFinance', 'Create Beneficiary Finance'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFinance', 'View Beneficiary Finance'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryFinance', 'Manage Beneficiary Finance'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFinance', 'Update Beneficiary Finance')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>