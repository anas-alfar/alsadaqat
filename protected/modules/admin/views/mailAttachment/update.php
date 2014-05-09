<?php
$this->breadcrumbs=array(
	'Mail Attachments'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MailAttachment','url'=>array('index')),
	array('label'=>'Create MailAttachment','url'=>array('create')),
	array('label'=>'View MailAttachment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MailAttachment','url'=>array('admin')),
);
?>

<h1>Update MailAttachment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>