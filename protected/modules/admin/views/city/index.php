<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Cities'),
);

$this->menu=array(
	array('label'=>Yii::t('City', 'Create City'),'url'=>array('create')),
	array('label'=>Yii::t('City', 'Manage City'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Cities')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
