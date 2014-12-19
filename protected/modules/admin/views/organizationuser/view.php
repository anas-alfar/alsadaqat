<?php
$this->breadcrumbs = array(
	Yii::t('app', 'Organization Users')=> array('index'),
	$model->title,
);

$this->menu = array(
	array('label' => Yii::t('OrganizationUser', 'List Organization User'), 'url' => array('index')),
	array('label' => Yii::t('OrganizationUser', 'Create Organization User'), 'url' => array('create')),
	array('label' => Yii::t('OrganizationUser', 'Update Organization User'), 'url' => array('update', 'id' => $model->id)),
	array('label' => Yii::t('OrganizationUser', 'Delete Organization User'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
	array('label' => Yii::t('OrganizationUser', 'Manage Organization User'), 'url' => array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUser', 'View Organization User')?> #<?php echo $model->id;?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView', array(
		'data'       => $model,
		'attributes' => array(
			'id',
			'username',
			'password',
			array(
				'name'  => 'title',
				'value' => array($model, 'getTranslatedTitle'),
			),
			'fullname',
			'ssn',
			array(
				'name'  => 'gender',
				'value' => array($model, 'getTranslatedGender'),
			),
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
	));?>
