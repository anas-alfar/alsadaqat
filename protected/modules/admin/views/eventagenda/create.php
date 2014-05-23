<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Agendas')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('EventAgenda', 'List Event Agenda'),'url'=>array('index')),
	array('label'=>Yii::t('EventAgenda', 'Manage Event Agenda'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventAgenda', 'Create Event Agenda')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>