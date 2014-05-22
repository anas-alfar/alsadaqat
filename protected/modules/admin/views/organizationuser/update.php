<?php
$this->breadcrumbs=array(
	'Organization Users'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationUser','url'=>array('index')),
	array('label'=>'Create OrganizationUser','url'=>array('create')),
	array('label'=>'View OrganizationUser','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationUser','url'=>array('admin')),
);
?>

<h1>Update OrganizationUser <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>