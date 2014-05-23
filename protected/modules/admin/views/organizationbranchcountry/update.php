<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Countries')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountry', 'List Organization Branch Country'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Create Organization Branch Country'),'url'=>array('create')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'View Organization Branch Country'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Manage Organization Branch Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountry', 'Update Organization Branch Country')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>