<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Paterfamiliases')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'List Beneficiary Paterfamilias'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Create Beneficiary Paterfamilias'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'View Beneficiary Paterfamilias'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Manage Beneficiary Paterfamilias'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPaterfamilias', 'Update Beneficiary Paterfamilias')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>