<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Users')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationUser', 'List Organization User'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationUser', 'Create Organization User'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationUser', 'View Organization User'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationUser', 'Manage Organization User'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationUser', 'Update Organization User')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>