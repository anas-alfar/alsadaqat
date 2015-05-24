<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Positions')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationPosition', 'List Organization Position'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationPosition', 'Create Organization Position'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationPosition', 'Update Organization Position'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationPosition', 'Delete Organization Position'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationPosition', 'Manage Organization Position'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationPosition', 'View Organization Position')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'qualifications',
		'responsibilities',
		//'owner_id',
		array(
            'name'  => 'owner_id',
            'value' => isset($model->owner) ? $model->owner->fullname : '',
        ),
		'created_at',
		'updated_at',
	),
)); ?>
