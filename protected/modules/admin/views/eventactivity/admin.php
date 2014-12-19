<?php
$this->breadcrumbs = array(
	Yii::t('app', 'Event Activities')=> array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu = array(
	array('label' => Yii::t('EventActivity', 'List Event Activity'), 'url' => array('index')),
	array('label' => Yii::t('EventActivity', 'Create Event Activity'), 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('event-activity-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Event Activities')?></h1>

<p>
<?php echo Yii::t('app', 'You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.')?>
</p>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button btn'));?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search', array(
		'model' => $model,
	));?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView', array(
		'id'           => 'event-activity-grid',
		'dataProvider' => $model->search(),
		'filter'       => $model,
		'columns'      => array(
			'id',
			array(
				'name'   => 'event_id',
				'type'   => 'raw',
				'filter' => Event::model()->getOptions(),
				'value'  => array($model, 'eventNameFilter'),
			),
			'title',
			'description',
			'owner_id',
			'created_at',
			/*
			'updated_at',
			 */
			array(
				'class' => 'bootstrap.widgets.TbButtonColumn',
			),
		),
	));?>
