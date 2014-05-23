<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Levels'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevel', 'Create Organization Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Manage Organization Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Access Levels')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
