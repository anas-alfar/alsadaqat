<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Orphans')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryOrphan', 'List Beneficiary Orphan'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryOrphan', 'Create Beneficiary Orphan'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryOrphan', 'View Beneficiary Orphan'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryOrphan', 'Manage Beneficiary Orphan'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryOrphan', 'Update Beneficiary Orphan')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>