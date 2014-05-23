<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Teachers')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryTeacher', 'List Beneficiary Teacher'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Create Beneficiary Teacher'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'View Beneficiary Teacher'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Manage Beneficiary Teacher'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryTeacher', 'Update Beneficiary Teacher')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>