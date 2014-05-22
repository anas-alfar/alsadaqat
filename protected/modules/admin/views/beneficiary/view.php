<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiaries') =>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('beneficiary', 'List Beneficiary'),'url'=>array('index')),
	array('label'=>Yii::t('beneficiary', 'Create Beneficiary'),'url'=>array('create')),
	array('label'=>Yii::t('beneficiary', 'Update Beneficiary'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('beneficiary', 'Delete Beneficiary'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('beneficiary', 'Manage Beneficiary'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('beneficiary', 'View Beneficiary')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'full_name',
		'ssn',
		'gender',
		'date_of_birth',
		'email',
		'home_phone',
		'mobile',
		'address',
		'personal_photo_path',
		'nationality_id',
		'country_id',
		'city_id',
		'beneficiary_type',
		'has_paterfamilias',
		'has_family_members',
		'has_home',
		'has_income',
		'organization_id',
		'organization_branch_id',
		'donator_id',
		'owner_id',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>
