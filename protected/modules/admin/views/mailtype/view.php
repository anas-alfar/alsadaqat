<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Types')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('MailType', 'List Mail Type'),'url'=>array('index')),
	array('label'=>Yii::t('MailType', 'Create Mail Type'),'url'=>array('create')),
	array('label'=>Yii::t('MailType', 'Update Mail Type'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('MailType', 'Delete Mail Type'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('MailType', 'Manage Mail Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailType', 'View Mail Type')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
