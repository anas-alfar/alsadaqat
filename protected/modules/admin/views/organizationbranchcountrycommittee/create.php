<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommittee','url'=>array('index')),
	array('label'=>'Manage OrganizationBranchCountryCommittee','url'=>array('admin')),
);
?>

<h1>Create OrganizationBranchCountryCommittee</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>