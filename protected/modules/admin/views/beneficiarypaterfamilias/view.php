<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Paterfamiliases')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'List Beneficiary Paterfamilias'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Create Beneficiary Paterfamilias'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Update Beneficiary Paterfamilias'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Delete Beneficiary Paterfamilias'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('BeneficiaryPaterfamilias', 'Manage Beneficiary Paterfamilias'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryPaterfamilias', 'View Beneficiary Paterfamilias')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'paterfamilias_first_name',
		'paterfamilias_middle_name',
		'paterfamilias_grandfather_name',
		'paterfamilias_family_name',
		'paterfamilias_date_of_birth',
		'ssn',
		'beneficiary_relation_id',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
