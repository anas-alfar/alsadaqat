<?php
$this->breadcrumbs=array(
	'Beneficiary Research Notes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BeneficiaryResearchNotes','url'=>array('index')),
	array('label'=>'Create BeneficiaryResearchNotes','url'=>array('create')),
	array('label'=>'Update BeneficiaryResearchNotes','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BeneficiaryResearchNotes','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BeneficiaryResearchNotes','url'=>array('admin')),
);
?>

<h1>View BeneficiaryResearchNotes #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'support_type',
		'support_period',
		'expected_support_period',
		'support_modality',
		'information_source',
		'has_small_business_idea',
		'small_business_idea_description',
		'researcher_recommendations',
		'researcher_name',
		'notes',
		'committee_recommendations',
		'committee_member_name',
		'committee_manager_name',
		'beneficiary_id',
		'owner_id',
		'created_at',
		'updated_at',
	),
)); ?>
