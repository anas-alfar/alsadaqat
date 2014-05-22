<?php
$this->breadcrumbs=array(
	'Event Photos'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List EventPhoto','url'=>array('index')),
	array('label'=>'Manage EventPhoto','url'=>array('admin')),
);
?>

<h1>Create EventPhoto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>