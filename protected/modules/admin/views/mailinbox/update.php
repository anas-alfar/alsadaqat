<?php
$this->breadcrumbs=array(
	'Mail Inboxes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List MailInbox','url'=>array('index')),
	array('label'=>'Create MailInbox','url'=>array('create')),
	array('label'=>'View MailInbox','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MailInbox','url'=>array('admin')),
);
?>

<h1>Update MailInbox <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>