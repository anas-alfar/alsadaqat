<?php
$this->breadcrumbs=array(
	'Mail Inboxes',
);

$this->menu=array(
	array('label'=>'Create MailInbox','url'=>array('create')),
	array('label'=>'Manage MailInbox','url'=>array('admin')),
);
?>

<h1>Mail Inboxes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
