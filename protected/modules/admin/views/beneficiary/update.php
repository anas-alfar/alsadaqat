<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiaries') =>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('beneficiary', 'List Beneficiary'),'url'=>array('index')),
	array('label'=>Yii::t('beneficiary', 'Create Beneficiary'),'url'=>array('create')),
	array('label'=>Yii::t('beneficiary', 'View Beneficiary'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('beneficiary', 'Manage Beneficiary'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('beneficiary', 'Update Beneficiary')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>