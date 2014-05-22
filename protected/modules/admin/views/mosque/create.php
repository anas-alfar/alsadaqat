<?php
$this->breadcrumbs=array(
	'Mosques'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Mosque','url'=>array('index')),
	array('label'=>'Manage Mosque','url'=>array('admin')),
);
?>

<h1>Create Mosque</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>