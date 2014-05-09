<?php
$this->breadcrumbs=array(
	'Organization Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationUser','url'=>array('index')),
	array('label'=>'Manage OrganizationUser','url'=>array('admin')),
);
?>

<h1>Create OrganizationUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>