<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Committee Users')=>array('index'),
	Yii::t('app', 'Manage'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCommitteeUser', 'List Branch Committee User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCommitteeUser', 'Create Branch Committee User'),'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('organization-branch-committee-user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?php echo Yii::t('app', 'Manage Organization Branch Committee Users')?></h1>

<p>
<?php echo Yii::t('app', 'You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.' ) ?>

</p>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array('model'=>$model, )); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'           => 'organization-branch-committee-user-grid',
	'dataProvider' => $model->search(),
	'filter'       => $model,
	'columns'      => array(
       array(
            'name'     => 'id',
            'value'    => '$this->grid->dataProvider->pagination->offset + $row+1',       //  row is zero based
            'filter'   => false,
            'sortable' => false,
        ),
        array(
            'name'  => 'organization_branch_committee_id',
            'value' => '$data->organizationBranchCommittee->name'
        ),
        array(
            'name'  => 'organization_user_id',
            'type'  => 'raw',
            'value' => isset($data->organizationUser) ? $data->organizationUser->fullname : ''
        ),
        array(
            'name'  => 'organization_position_id',
            'type'  => 'raw',
            'filter'=> OrganizationPosition::model()->getOptions(),
            'value' => array($model, 'organizationPositionFilter'), 
        ),
        array(
            'name'  => 'owner_id',
            'type'  => 'raw',
            'value' => isset($data->owner) ? $data->owner->fullname : ''
        ),
		'created_at',
		/*
		'updated_at',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
