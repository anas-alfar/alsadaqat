<?php
$this->breadcrumbs=array(
	'Donators'=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>'List Donator','url'=>array('index')),
	array('label'=>'Create Donator','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('donator-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Donators</h1>

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
	'id'=>'donator-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'fullname',
		'ssn',
		'gender',
		'email',
		/*
		'date_of_birth',
		'home_phone',
		'work_phone',
		'mobile',
		'nationality_id',
		'organization_id',
		'organization_branch_id',
		'owner_id',
		'personal_photo_path',
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
