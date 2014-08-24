<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosque Agents')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('MosqueAgent', 'List Mosque Agent'),'url'=>array('index')),
	array('label'=>Yii::t('MosqueAgent', 'Create Mosque Agent'),'url'=>array('create')),
	array('label'=>Yii::t('MosqueAgent', 'Update Mosque Agent'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MosqueAgent', 'Delete Mosque Agent'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('MosqueAgent', 'Manage Mosque Agent'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MosqueAgent', 'View Mosque Agent')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'company_name',
		'title',
		'fullname',
		'ssn',
		'gender',
		'email',
		'home_phone',
		'work_phone',
		'mobile',
		'address',
		'bank_name',
		'bank_branch_name',
		'bank_branch_number',
		'bank_swift_code',
		'bank_account_number',
		array('name'  => 'personal_photo_path', 'type' => 'raw', 'value' => CHtml::image($model->preview->getUrl('large'), $model->getAttributeLabel('personal_photo_path') ) ),
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'city_id',
		'organization_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>