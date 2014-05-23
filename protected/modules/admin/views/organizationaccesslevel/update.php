<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Access Levels')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationAccessLevel', 'List Organization Access Level'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Create Organization Access Level'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationAccessLevel', 'View Organization Access Level'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationAccessLevel', 'Manage Organization Access Level'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationAccessLevel', 'Update Organization Access Level')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>