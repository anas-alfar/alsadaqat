<?php
/* @var $this OrganizationTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organization Types',
);

$this->menu=array(
	array('label'=>'Create OrganizationType', 'url'=>array('create')),
	array('label'=>'Manage OrganizationType', 'url'=>array('admin')),
);
?>

<h1>Organization Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
