<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branches')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranch', 'List Organization Branch'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranch', 'Create Organization Branch'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-branch-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Organization Branches')?></h1>

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
	'id'=>'organization-branch-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
       array(
            'name'     => 'id',
            'value'    => '$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
            'filter'   => false,
            'sortable' => false,
        ),
        array(
            'filter' => false,
            'name'   => 'organization_id',
            'value'  => '$data->organization->name'
        ),
		'name',
		'description',
		'website',
		'phone',
		/*
		'fax',
		'mobile',
        array(
            'name'  => 'country_id',
            'type'  => 'raw',
            'filter'=> Country::model()->getOptions(),
            'value' => array($model, 'countryFilter'), 
        ),		'city_id',
		'adress',
		'manager_id',
		'work_days',
		'work_hours',
		'break_hours',
		'geo_location',
		'is_main_branch',
		'owner_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
