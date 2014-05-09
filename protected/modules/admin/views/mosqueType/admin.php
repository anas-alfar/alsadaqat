<?php
$this->breadcrumbs=array(
	'Mosque Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MosqueType','url'=>array('index')),
	array('label'=>'Create MosqueType','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mosque-type-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Mosque Types</h1>

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
	'id'=>'mosque-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'construction_area',
		'construction_cost',
		'construction_time',
		'construction_type',
		/*
		'furniture_type',
		'number_of_people',
		'number_of_restrooms',
		'number_of_floors',
		'number_of_entrances',
		'has_female_area',
		'has_sound_system',
		'has_air_condition',
		'agent_id',
		'owner_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
