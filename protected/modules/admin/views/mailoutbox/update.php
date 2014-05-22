<?php
$this->breadcrumbs=array(
	'Mail Outboxes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List MailOutbox','url'=>array('index')),
	array('label'=>'Create MailOutbox','url'=>array('create')),
	array('label'=>'View MailOutbox','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MailOutbox','url'=>array('admin')),
);
?>

<h1>Update MailOutbox <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>