<?php
$this->breadcrumbs=array(
	'Mail Types',
);

$this->menu=array(
	array('label'=>'Create MailType','url'=>array('create')),
	array('label'=>'Manage MailType','url'=>array('admin')),
);
?>

<h1>Mail Types</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
