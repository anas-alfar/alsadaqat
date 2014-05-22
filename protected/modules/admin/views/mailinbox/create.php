<?php
$this->breadcrumbs=array(
	'Mail Inboxes'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MailInbox','url'=>array('index')),
	array('label'=>'Manage MailInbox','url'=>array('admin')),
);
?>

<h1>Create MailInbox</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>