<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Countries')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountry', 'List Organization Branch Country'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Create Organization Branch Country'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Update Organization Branch Country'),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Delete Organization Branch Country'),'url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'csrf'=>true)),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Manage Organization Branch Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountry', 'View Organization Branch Country')?> #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'organization_branch_id',
		array('name'  => 'country_id','value' => array($model, 'countryFilter')),
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
