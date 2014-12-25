<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Teachers')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryTeacher', 'List Beneficiary Teacher'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Create Beneficiary Teacher'),'url'=>array('create')),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Update Beneficiary Teacher'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Delete Beneficiary Teacher'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('BeneficiaryTeacher', 'Manage Beneficiary Teacher'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('BeneficiaryTeacher', 'View Beneficiary Teacher')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'scientific_degree',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
