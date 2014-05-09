<?php
$this->breadcrumbs=array(
	'Organization Access Levels'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganizationAccessLevel','url'=>array('index')),
	array('label'=>'Create OrganizationAccessLevel','url'=>array('create')),
	array('label'=>'View OrganizationAccessLevel','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationAccessLevel','url'=>array('admin')),
);
?>

<h1>Update OrganizationAccessLevel <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>