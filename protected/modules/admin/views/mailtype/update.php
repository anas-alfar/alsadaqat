<?php
$this->breadcrumbs=array(
	'Mail Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List MailType','url'=>array('index')),
	array('label'=>'Create MailType','url'=>array('create')),
	array('label'=>'View MailType','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage MailType','url'=>array('admin')),
);
?>

<h1>Update MailType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>