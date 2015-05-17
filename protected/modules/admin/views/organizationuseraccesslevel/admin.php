<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization User Access Levels')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'List User Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Create User Access Level'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-user-access-level-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Organization User Access Levels')?></h1>

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
	'id'=>'organization-user-access-level-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
       array(
            'name'     => 'id',
            'value'    => '$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
            'filter'   => false,
            'sortable' => false,
        ),
		'user_id',
		'organization_access_level_id',
		'created_at',
		'updated_at',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
