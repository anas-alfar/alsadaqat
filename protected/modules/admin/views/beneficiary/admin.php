<?php
$this->breadcrumbs=array(
	'Beneficiaries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Beneficiary','url'=>array('index')),
	array('label'=>'Create Beneficiary','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiary-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Beneficiaries</h1>

<p>
<?php echo Yii::t('app', 'You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.' ) ?>

</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'beneficiary-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'full_name',
		'ssn',
		'gender',
		'date_of_birth',
		'email',
		/*
		'home_phone',
		'mobile',
		'address',
		'personal_photo_path',
		'nationality_id',
		'country_id',
		'city_id',
		'beneficiary_type',
		'has_paterfamilias',
		'has_family_members',
		'has_home',
		'has_income',
		'organization_id',
		'organization_branch_id',
		'donator_id',
		'owner_id',
		'created_at',
		'updated_at',
		'notes',
		'options',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
