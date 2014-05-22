<?php
$this->breadcrumbs=array(
	'Organization Branches'=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List OrganizationBranch','url'=>array('index')),
	array('label'=>'Manage OrganizationBranch','url'=>array('admin')),
);
?>

<h1>Create OrganizationBranch</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>