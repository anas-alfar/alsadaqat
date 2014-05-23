<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Teachers')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryTeacher', 'List Beneficiary Teacher'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Manage Beneficiary Teacher'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryTeacher', 'Create Beneficiary Teacher')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>