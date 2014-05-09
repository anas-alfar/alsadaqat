<?php
$this->breadcrumbs=array(
	'Mail Outboxes',
);

$this->menu=array(
	array('label'=>'Create MailOutbox','url'=>array('create')),
	array('label'=>'Manage MailOutbox','url'=>array('admin')),
);
?>

<h1>Mail Outboxes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
