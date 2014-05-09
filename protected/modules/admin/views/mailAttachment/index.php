<?php
$this->breadcrumbs=array(
	'Mail Attachments',
);

$this->menu=array(
	array('label'=>'Create MailAttachment','url'=>array('create')),
	array('label'=>'Manage MailAttachment','url'=>array('admin')),
);
?>

<h1>Mail Attachments</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
