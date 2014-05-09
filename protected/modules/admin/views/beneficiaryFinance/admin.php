<?php
$this->breadcrumbs=array(
	'Beneficiary Finances'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BeneficiaryFinance','url'=>array('index')),
	array('label'=>'Create BeneficiaryFinance','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiary-finance-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Beneficiary Finances</h1>

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
	'id'=>'beneficiary-finance-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'has_supplies_card',
		'income_from_paterfamilias',
		'income_from_beneficiary_business',
		'income_from_beneficiary_family_business',
		'income_from_social_security',
		/*
		'income_from_retirement',
		'income_from_lands',
		'income_from_property',
		'income_from_agriculture',
		'income_from_national_aid_fund',
		'income_from_zakat_fund',
		'income_from_charity_fund',
		'income_total',
		'spending_home_rent',
		'spending_food',
		'spending_clothes',
		'spending_medication',
		'spending_smoking',
		'spending_education',
		'spending_transportation',
		'spending_gas_invoice',
		'spending_water_invoice',
		'spending_elctricity_invoice',
		'spending_kerosene',
		'spending_other',
		'spending_total',
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
