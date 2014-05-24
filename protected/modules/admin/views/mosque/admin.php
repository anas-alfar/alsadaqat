<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'List Mosque'),'url'=>array('index')),
	array('label'=>Yii::t('Mosque', 'Create Mosque'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('mosque-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Mosques')?></h1>

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
	'id'=>'mosque-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'address',
		'contract_date',
		'contract_photo_path',
		'construction_progress',
		/*
		array(
            'name'  => array(
            'name'  => 'beneficiary_id',
            'type'  => 'raw',
            'filter'=> Beneficiary::model()->getOptions(),
            'value' => array($model, 'beneficiaryFullNameFilter'), 
        ),
            'type'  => 'raw',
            'filter'=> Donator::model()->getOptions(),
            'value' => array($model, 'donatorFilter'), 
        ),
		array(
            'name'  => 'agent_id',
            'type'  => 'raw',
            'filter'=> MosqueAgent::model()->getOptions(),
            'value' => array($model, 'mosqueAgentgentFilter'), 
        ),
		array(
            'name'  => 'mosque_type_id',
            'type'  => 'raw',
            'filter'=> MosqueType::model()->getOptions(),
            'value' => array($model, 'mosqueTypeFilter'), 
        ),
        array(
            'name'  => 'country_id',
            'type'  => 'raw',
            'filter'=> Country::model()->getOptions(),
            'value' => array($model, 'countryFilter'), 
        ),		'city_id',
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
