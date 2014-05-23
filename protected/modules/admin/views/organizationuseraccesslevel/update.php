<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization User Access Levels')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'List User Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Create User Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'View User Access Level'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationUserAccessLevel', 'Manage User Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUserAccessLevel', 'Update Organization User Access Level')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>