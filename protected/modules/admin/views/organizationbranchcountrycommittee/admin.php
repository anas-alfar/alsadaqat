<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommittee','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountryCommittee','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-branch-country-committee-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Organization Branch Country Committees</h1>

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
	'id'=>'organization-branch-country-committee-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'organization_branch_country_id',
		'name',
		'description',
		'agenda',
		'annual_plan',
		/*
		'owner_id',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
