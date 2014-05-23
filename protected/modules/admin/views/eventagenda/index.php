<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Agendas'),
);

$this->menu=array(
	array('label'=>Yii::t('EventAgenda', 'Create Event Agenda'),'url'=>array('create')),
	array('label'=>Yii::t('EventAgenda', 'Manage Event Agenda'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('app', 'Event Agendas')?></h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
