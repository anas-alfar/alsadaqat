<?php
$this->breadcrumbs=array(
	'Mail Attachments'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List MailAttachment','url'=>array('index')),
	array('label'=>'Manage MailAttachment','url'=>array('admin')),
);
?>

<h1>Create MailAttachment</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>