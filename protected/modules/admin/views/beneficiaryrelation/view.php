<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Relations')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryRelation', 'List Beneficiary Relation'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryRelation', 'Create Beneficiary Relation'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryRelation', 'Update Beneficiary Relation'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryRelation', 'Delete Beneficiary Relation'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('BeneficiaryRelation', 'Manage Beneficiary Relation'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryRelation', 'View Beneficiary Relation')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
