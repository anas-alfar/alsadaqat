<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Users')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUser', 'List Organization User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUser', 'Create Organization User'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Organization Users')?></h1>

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
	'id'=>'organization-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'title',
		'fullname',
		'ssn',
		/*
		'gender',
		'email',
		'date_of_birth',
		'home_phone',
		'work_phone',
		'local_mobile',
		'international_mobile',
		array(
            'name'  => 'nationality_id',
            'type'  => 'raw',
            'filter'=> Country::model()->getOptions(),
            'value' => array($model, 'nationalityFilter'), 
        ),
		'organization_id',
		'organization_branch_id',
		'personal_photo_path',
		'passport_photo_path',
		'blocked',
		'last_login_date',
		'last_login_ip',
		'created_at',
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
