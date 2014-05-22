<?php
$this->breadcrumbs=array(
	'Organization Branches'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationBranch','url'=>array('index')),
	array('label'=>'Create OrganizationBranch','url'=>array('create')),
	array('label'=>'View OrganizationBranch','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationBranch','url'=>array('admin')),
);
?>

<h1>Update OrganizationBranch <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>