<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organizations') => array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=> Yii::t('organization', 'List Organization'), 'url'=>array('index')),
	array('label'=> Yii::t('organization', 'Manage Organization'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('organization', 'Create Organization') ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>