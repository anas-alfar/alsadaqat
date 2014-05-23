<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branches'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranch', 'Create Organization Branch'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranch', 'Manage Organization Branch'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Branches')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
