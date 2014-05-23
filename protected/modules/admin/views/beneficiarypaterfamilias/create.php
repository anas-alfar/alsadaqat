<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Paterfamiliases')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'List Beneficiary Paterfamilias'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Manage Beneficiary Paterfamilias'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPaterfamilias', 'Create Beneficiary Paterfamilias')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>