<?php
$this->breadcrumbs=array(
	'Event Activities'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List EventActivity','url'=>array('index')),
	array('label'=>'Manage EventActivity','url'=>array('admin')),
);
?>

<h1>Create EventActivity</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>