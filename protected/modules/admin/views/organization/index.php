<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organizations'),
);

$this->menu=array(
	array('label'=> Yii::t('organization', 'Create Organization'), 'url'=>array('create')),
	array('label'=> Yii::t('organization', 'Manage Organization'), 'url'=>array('admin')),
);
?>

<h1><?php Yii::t('app', 'Organizations') ?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
