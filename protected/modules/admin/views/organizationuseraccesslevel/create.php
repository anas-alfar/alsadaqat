<?php
$this->breadcrumbs=array(
	'Organization User Access Levels'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List OrganizationUserAccessLevel','url'=>array('index')),
	array('label'=>'Manage OrganizationUserAccessLevel','url'=>array('admin')),
);
?>

<h1>Create OrganizationUserAccessLevel</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>