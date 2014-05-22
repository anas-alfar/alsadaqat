<?php
$this->breadcrumbs=array(
	'Event Agendas'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List EventAgenda','url'=>array('index')),
	array('label'=>'Create EventAgenda','url'=>array('create')),
	array('label'=>'View EventAgenda','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage EventAgenda','url'=>array('admin')),
);
?>

<h1>Update EventAgenda <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>