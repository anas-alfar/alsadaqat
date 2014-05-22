<?php
$this->breadcrumbs=array(
	'Mail Outboxes'=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>'List MailOutbox','url'=>array('index')),
	array('label'=>'Create MailOutbox','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mail-outbox-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mail Outboxes</h1>

<p>
<?php echo Yii::t('app', 'You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.' ) ?>

</p>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mail-outbox-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'organization_id',
		'mail_type_id',
		'mail_template_id',
		'number',
		'from_mail',
		/*
		'from_name',
		'from_department',
		'to_mail',
		'to_name',
		'to_department',
		'subject',
		'description',
		'send_at',
		'owner_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
