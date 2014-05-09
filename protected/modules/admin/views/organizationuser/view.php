<?php
$this->breadcrumbs=array(
	'Organization Users'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List OrganizationUser','url'=>array('index')),
	array('label'=>'Create OrganizationUser','url'=>array('create')),
	array('label'=>'Update OrganizationUser','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete OrganizationUser','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationUser','url'=>array('admin')),
);
?>

<h1>View OrganizationUser #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'title',
		'fullname',
		'ssn',
		'gender',
		'email',
		'date_of_birth',
		'home_phone',
		'work_phone',
		'local_mobile',
		'international_mobile',
		'nationality_id',
		'organization_id',
		'organization_branch_id',
		'personal_photo_path',
		'passport_photo_path',
		'blocked',
		'last_login_date',
		'last_login_ip',
		'created_at',
		'updated_at',
	),
)); ?>
