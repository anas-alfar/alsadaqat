<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Wells'),
);

$this->menu=array(
	array('label'=>Yii::t('Well', 'Create Well'),'url'=>array('create')),
	array('label'=>Yii::t('Well', 'Manage Well'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Wells')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
