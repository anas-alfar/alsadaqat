<?php
$this->breadcrumbs=array(
	'Organization Branch Countries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountry','url'=>array('index')),
	array('label'=>'Manage OrganizationBranchCountry','url'=>array('admin')),
);
?>

<h1>Create OrganizationBranchCountry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>