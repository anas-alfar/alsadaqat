<?php
$this->breadcrumbs=array(
	'Mosque Agents'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List MosqueAgent','url'=>array('index')),
	array('label'=>'Create MosqueAgent','url'=>array('create')),
	array('label'=>'View MosqueAgent','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MosqueAgent','url'=>array('admin')),
);
?>

<h1>Update MosqueAgent <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>