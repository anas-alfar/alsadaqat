<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Event Types')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('EventType', 'List Event Type'),'url'=>array('index')),
	array('label'=>Yii::t('EventType', 'Create Event Type'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('event-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Event Types')?></h1>

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
	'id'=>'event-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
       array(
            'name'     => 'id',
            'value'    => '$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
            'filter'   => false,
            'sortable' => false,
        ),
		'organization_id',
		'title',
		'description',
		'owner_id',
		'created_at',
		/*
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
