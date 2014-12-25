<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Family Members')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'List Family Members'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Create Family Members'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Update Family Members'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Delete Family Members'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('BeneficiaryFamilyMembers', 'Manage Family Members'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryFamilyMembers', 'View Beneficiary Family Members') ?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'ssn',
		'date_of_birth',
		'beneficiary_relation_id',
		'marital_status',
		'educational_status',
		'health_status',
		'business',
		'other',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
