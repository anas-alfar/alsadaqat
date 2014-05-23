<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Activities'),
);

$this->menu=array(
	array('label'=>Yii::t('EventActivity', 'Create Event Activity'),'url'=>array('create')),
	array('label'=>Yii::t('EventActivity', 'Manage Event Activity'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Event Activities')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
