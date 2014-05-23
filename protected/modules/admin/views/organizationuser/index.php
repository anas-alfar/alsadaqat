<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Users'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUser', 'Create Organization User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationUser', 'Manage Organization User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Users')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
