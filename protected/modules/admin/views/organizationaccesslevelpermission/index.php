<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Level Permissions'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Create Access Level Permission'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevelPermission', 'Manage Access Level Permission'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Access Level Permissions')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
