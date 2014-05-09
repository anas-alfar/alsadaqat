<?php
$this->breadcrumbs=array(
	'Mail Inboxes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MailInbox','url'=>array('index')),
	array('label'=>'Create MailInbox','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mail-inbox-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mail Inboxes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mail-inbox-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'number',
		'from_name',
		'from_department',
		/*
		'subject',
		'received_at',
		'owner_id',
		'mail_attachment_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>