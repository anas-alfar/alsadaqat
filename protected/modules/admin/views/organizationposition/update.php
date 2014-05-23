<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Positions')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationPosition', 'List Organization Position'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationPosition', 'Create Organization Position'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationPosition', 'View Organization Position'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationPosition', 'Manage Organization Position'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationPosition', 'Update Organization Position')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>