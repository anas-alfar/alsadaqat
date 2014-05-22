<?php
$this->breadcrumbs=array(
	'Mail Templates'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MailTemplate','url'=>array('index')),
	array('label'=>'Manage MailTemplate','url'=>array('admin')),
);
?>

<h1>Create MailTemplate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>