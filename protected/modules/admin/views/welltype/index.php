<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Well Types'),
);

$this->menu=array(
	array('label'=>Yii::t('WellType', 'Create Well Type'),'url'=>array('create')),
	array('label'=>Yii::t('WellType', 'Manage Well Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Well Types')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
