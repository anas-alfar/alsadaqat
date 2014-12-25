<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Student Classes')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryStudentClass', 'List Beneficiary Student Class'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Create Beneficiary Student Class'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Update Beneficiary Student Class'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Delete Beneficiary Student Class'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('BeneficiaryStudentClass', 'Manage Beneficiary Student Class'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryStudentClass', 'View Beneficiary Student Class')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'class_name',
		'major_name',
		'school_name',
		'address',
		'start_at',
		'end_at',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
