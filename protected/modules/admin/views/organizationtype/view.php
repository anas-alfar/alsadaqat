<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Types')=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationType', 'List Organization Type'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationType', 'Create Organization Type'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationType', 'Update Organization Type'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationType', 'Delete Organization Type'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationType', 'Manage Organization Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationType', 'View Organization Type')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'description',
		'created_at',
		'updated_at',
	),
)); ?>
