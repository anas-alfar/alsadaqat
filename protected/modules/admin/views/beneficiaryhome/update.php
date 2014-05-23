<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Homes')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryHome', 'List Beneficiary Home'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryHome', 'Create Beneficiary Home'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryHome', 'View Beneficiary Home'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryHome', 'Manage Beneficiary Home'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryHome', 'Update Beneficiary Home')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>