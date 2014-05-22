<?php
$this->breadcrumbs=array(
	'Mail Outboxes'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MailOutbox','url'=>array('index')),
	array('label'=>'Manage MailOutbox','url'=>array('admin')),
);
?>

<h1>Create MailOutbox</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>