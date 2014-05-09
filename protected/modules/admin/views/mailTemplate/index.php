<?php
$this->breadcrumbs=array(
	'Mail Templates',
);

$this->menu=array(
	array('label'=>'Create MailTemplate','url'=>array('create')),
	array('label'=>'Manage MailTemplate','url'=>array('admin')),
);
?>

<h1>Mail Templates</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
