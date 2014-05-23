<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Student Classes')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudentClass', 'List Beneficiary Student Class'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Manage Beneficiary Student Class'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryStudentClass', 'Create Beneficiary Student Class')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>