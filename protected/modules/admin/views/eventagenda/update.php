<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Agendas')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('EventAgenda', 'List Event Agenda'),'url'=>array('index')),
	array('label'=>Yii::t('EventAgenda', 'Create Event Agenda'),'url'=>array('create')),
	array('label'=>Yii::t('EventAgenda', 'View Event Agenda'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('EventAgenda', 'Manage Event Agenda'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('EventAgenda', 'Update Event Agenda')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>