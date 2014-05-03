<?php
/* @var $this OrganizationTypeController */
/* @var $model OrganizationType */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationType', 'url'=>array('index')),
	array('label'=>'Manage OrganizationType', 'url'=>array('admin')),
);
?>

<h1>Create OrganizationType</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>