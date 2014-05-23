<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Positions'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationPosition', 'Create Organization Position'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationPosition', 'Manage Organization Position'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Organization Positions')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
