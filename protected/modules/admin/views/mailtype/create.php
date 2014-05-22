<?php
$this->breadcrumbs=array(
	'Mail Types'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MailType','url'=>array('index')),
	array('label'=>'Manage MailType','url'=>array('admin')),
);
?>

<h1>Create MailType</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>