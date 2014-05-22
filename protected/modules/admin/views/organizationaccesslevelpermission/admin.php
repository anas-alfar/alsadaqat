<?php
$this->breadcrumbs=array(
	'Organization Access Level Permissions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevelPermission','url'=>array('index')),
	array('label'=>'Create OrganizationAccessLevelPermission','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-access-level-permission-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Organization Access Level Permissions</h1>

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
	'id'=>'organization-access-level-permission-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'organization_access_level_id',
		'controller_name',
		'action_name',
		'permission',
		'created_at',
		/*
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
