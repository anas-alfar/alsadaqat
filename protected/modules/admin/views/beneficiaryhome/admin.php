<?php
$this->breadcrumbs=array(
	'Beneficiary Homes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BeneficiaryHome','url'=>array('index')),
	array('label'=>'Create BeneficiaryHome','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiary-home-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Beneficiary Homes</h1>

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
	'id'=>'beneficiary-home-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'description',
		'owner_name',
		'construction_type',
		'number_of_rooms',
		'number_of_residents',
		/*
		'contract_type',
		'rent_cost',
		'rent_type',
		'has_tv',
		'has_refrigerator',
		'has_washer',
		'has_dryer',
		'has_video_player',
		'has_telephone',
		'has_mobile',
		'has_gas',
		'has_oven',
		'has_microwave',
		'has_air_conditioner',
		'has_water_solar_heater',
		'has_water_electrical_heater',
		'has_gas_heater',
		'has_electrical_heater',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
