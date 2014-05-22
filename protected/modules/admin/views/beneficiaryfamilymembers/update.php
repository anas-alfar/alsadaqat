<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Family Members')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'List Family Members'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Create Family Members'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'View Family Members'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Manage Family Members'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFamilyMembers', 'Update Beneficiary Family Members')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>