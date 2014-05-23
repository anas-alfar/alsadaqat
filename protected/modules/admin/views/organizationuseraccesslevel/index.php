<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization User Access Levels'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Create User Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Manage User Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization User Access Levels')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
