<?php
$this->breadcrumbs=array(
	'Mosque Photos'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MosquePhoto','url'=>array('index')),
	array('label'=>'Manage MosquePhoto','url'=>array('admin')),
);
?>

<h1>Create MosquePhoto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>