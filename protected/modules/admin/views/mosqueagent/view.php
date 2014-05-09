<?php
$this->breadcrumbs=array(
	'Mosque Agents'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List MosqueAgent','url'=>array('index')),
	array('label'=>'Create MosqueAgent','url'=>array('create')),
	array('label'=>'Update MosqueAgent','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete MosqueAgent','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MosqueAgent','url'=>array('admin')),
);
?>

<h1>View MosqueAgent #<?php echo $model->id; ?></h1>

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
		'personal_photo_path',
		'country_id',
		'city_id',
		'organization_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
