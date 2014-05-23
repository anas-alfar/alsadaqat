<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Countries')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('Country', 'List Country'),'url'=>array('index')),
	array('label'=>Yii::t('Country', 'Create Country'),'url'=>array('create')),
	array('label'=>Yii::t('Country', 'Update Country'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('Country', 'Delete Country'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('Country', 'Manage Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Country', 'View Country')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'name_ar',
		'iso_code_2',
		'iso_code_3',
		'published',
		'created_at',
		'updated_at',
	),
)); ?>
