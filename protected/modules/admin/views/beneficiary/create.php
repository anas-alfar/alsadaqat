<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiaries') =>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('beneficiary', 'List Beneficiary'),'url'=>array('index')),
	array('label'=>Yii::t('beneficiary', 'Manage Beneficiary'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('beneficiary', 'Create Beneficiary') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>