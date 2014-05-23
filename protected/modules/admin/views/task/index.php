<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Tasks'),
);

$this->menu=array(
	array('label'=>Yii::t('Task', 'Create Task'),'url'=>array('create')),
	array('label'=>Yii::t('Task', 'Manage Task'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Tasks')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
