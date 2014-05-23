<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Tasks')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('Task', 'List Task'),'url'=>array('index')),
	array('label'=>Yii::t('Task', 'Manage Task'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Task', 'Create Task')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>