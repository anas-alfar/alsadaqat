<?php
$this->breadcrumbs=array(
	'Organization Branch Country Committee Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountryCommitteeUser','url'=>array('index')),
	array('label'=>'Manage OrganizationBranchCountryCommitteeUser','url'=>array('admin')),
);
?>

<h1>Create OrganizationBranchCountryCommitteeUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>