<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Poors')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPoor', 'List Beneficiary Poor'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Create Beneficiary Poor'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Update Beneficiary Poor'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryPoor', 'Delete Beneficiary Poor'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('BeneficiaryPoor', 'Manage Beneficiary Poor'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPoor', 'View Beneficiary Poor')?> #<?php echo $model->id; ?></h1>

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
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
