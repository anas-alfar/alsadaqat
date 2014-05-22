<?php
$this->breadcrumbs=array(
	'Organization Positions'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List OrganizationPosition','url'=>array('index')),
	array('label'=>'Manage OrganizationPosition','url'=>array('admin')),
);
?>

<h1>Create OrganizationPosition</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>