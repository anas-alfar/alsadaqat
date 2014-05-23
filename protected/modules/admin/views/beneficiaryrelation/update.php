<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Relations')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryRelation', 'List Beneficiary Relation'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryRelation', 'Create Beneficiary Relation'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryRelation', 'View Beneficiary Relation'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryRelation', 'Manage Beneficiary Relation'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryRelation', 'Update Beneficiary Relation')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>