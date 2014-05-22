<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List BeneficiaryDisabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Create BeneficiaryDisabled'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Update BeneficiaryDisabled'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Delete BeneficiaryDisabled'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Manage BeneficiaryDisabled'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryDisabled', 'View BeneficiaryDisabled')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'father_full_name',
		'is_father_alive',
		'father_job',
		'father_date_of_birth',
		'father_date_of_death',
		'father_reason_of_death',
		'father_death_certificate_path',
		'mother_full_name',
		'is_mother_alive',
		'mother_job',
		'mother_date_of_birth',
		'mother_date_of_death',
		'mother_reason_of_death',
		'mother_death_certificate_path',
		'number_of_brothers',
		'number_of_sisters',
		'disability_type',
		'disability_reason',
		'disability_description',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
