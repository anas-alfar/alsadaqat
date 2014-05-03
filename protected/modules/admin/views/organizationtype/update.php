<?php
/* @var $this OrganizationTypeController */
/* @var $model OrganizationType */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganizationType', 'url'=>array('index')),
	array('label'=>'Create OrganizationType', 'url'=>array('create')),
	array('label'=>'View OrganizationType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OrganizationType', 'url'=>array('admin')),
);
?>

<h1>Update OrganizationType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>