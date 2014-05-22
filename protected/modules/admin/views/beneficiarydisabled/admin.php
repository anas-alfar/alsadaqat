<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Beneficiary Disableds')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('BeneficiaryDisabled', 'List BeneficiaryDisabled'),'url'=>array('index')),
	array('label'=>Yii::t('BeneficiaryDisabled', 'Create BeneficiaryDisabled'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('beneficiary-disabled-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Beneficiary Disableds')?></h1>

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
	'id'=>'beneficiary-disabled-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'father_full_name',
		'is_father_alive',
		'father_job',
		'father_date_of_birth',
		'father_date_of_death',
		/*
		'father_reason_of_death',
		'father_death_certificate_path',
		'mother_full_name',
		'is_mother_alive',
		'mother_job',
		'mother_date_of_birth',
		'mother_date_of_death',
		'mother_reason_of_death',
		'mother_death_certificate_path',
		'number_of_brothers',
		'number_of_sisters',
		'disability_type',
		'disability_reason',
		'disability_description',
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
