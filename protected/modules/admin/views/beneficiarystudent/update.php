<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Students')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudent', 'List Beneficiary Student'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryStudent', 'Create Beneficiary Student'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryStudent', 'View Beneficiary Student'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryStudent', 'Manage Beneficiary Student'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryStudent', 'Update Beneficiary Student')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>