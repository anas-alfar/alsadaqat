<?php
$this->breadcrumbs=array(
	'Beneficiary Widows'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List BeneficiaryWidow','url'=>array('index')),
	array('label'=>'Create BeneficiaryWidow','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiary-widow-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Beneficiary Widows</h1>

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
	'id'=>'beneficiary-widow-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'husband_full_name',
		'husband_job',
		'husband_date_of_birth',
		'husband_date_of_death',
		'husband_reason_of_death',
		/*
		'husband_death_certificate_path',
		'number_of_sons',
		'number_of_daughters',
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
