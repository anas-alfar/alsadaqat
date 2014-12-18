<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Donators')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('Donator', 'List Donator'),'url'=>array('index')),
	array('label'=>Yii::t('Donator', 'Create Donator'),'url'=>array('create')),
	array('label'=>Yii::t('Donator', 'Update Donator'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Donator', 'Delete Donator'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Donator', 'Manage Donator'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Donator', 'View Donator')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
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
		'mobile',
		//'nationality_id',
        array(
            'name' => 'nationality_id',
            'value'=> (Yii::app()->language == 'ar') ? $model->nationality->name_ar : $model->nationality->name 
        ),
		//'organization_id',
        array(
            'name' => 'organization_id',
            'value'=> $model->organization->name 
        ),
		//'organization_branch_id',
        array(
            'name' => 'organization_branch_id',
            'value'=> $model->organizationBranch->name 
        ),
		//'owner_id',
        array(
            'name' => 'owner_id',
            'value'=> $model->owner->fullname 
        ),
		'personal_photo_path',
		'created_at',
		'updated_at',
		'notes',
		'options',
	),
)); ?>
