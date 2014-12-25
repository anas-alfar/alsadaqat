<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Templates')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('MailTemplate', 'List Mail Template'),'url'=>array('index')),
	array('label'=>Yii::t('MailTemplate', 'Create Mail Template'),'url'=>array('create')),
	array('label'=>Yii::t('MailTemplate', 'Update Mail Template'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailTemplate', 'Delete Mail Template'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('MailTemplate', 'Manage Mail Template'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailTemplate', 'View Mail Template')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'number',
		'from_name',
		'from_department',
		'to_name',
		'to_department',
		'subject',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
