<?php
$this->breadcrumbs=array(
	'Mail Templates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MailTemplate','url'=>array('index')),
	array('label'=>'Create MailTemplate','url'=>array('create')),
	array('label'=>'View MailTemplate','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MailTemplate','url'=>array('admin')),
);
?>

<h1>Update MailTemplate <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>