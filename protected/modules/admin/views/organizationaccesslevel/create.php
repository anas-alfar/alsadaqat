<?php
$this->breadcrumbs=array(
	'Organization Access Levels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevel','url'=>array('index')),
	array('label'=>'Manage OrganizationAccessLevel','url'=>array('admin')),
);
?>

<h1>Create OrganizationAccessLevel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>