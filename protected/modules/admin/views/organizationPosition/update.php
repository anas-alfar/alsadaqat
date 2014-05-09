<?php
$this->breadcrumbs=array(
	'Organization Positions'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganizationPosition','url'=>array('index')),
	array('label'=>'Create OrganizationPosition','url'=>array('create')),
	array('label'=>'View OrganizationPosition','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationPosition','url'=>array('admin')),
);
?>

<h1>Update OrganizationPosition <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>