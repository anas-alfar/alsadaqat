<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Types')=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationType', 'List Organization Type'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationType', 'Create Organization Type'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationType', 'View Organization Type'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationType', 'Manage Organization Type'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationType', 'Update Organization Type')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>