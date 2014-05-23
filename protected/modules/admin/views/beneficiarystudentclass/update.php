<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Student Classes')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudentClass', 'List Beneficiary Student Class'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Create Beneficiary Student Class'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'View Beneficiary Student Class'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Manage Beneficiary Student Class'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryStudentClass', 'Update Beneficiary Student Class')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>