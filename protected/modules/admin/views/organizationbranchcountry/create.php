<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Organization Branch Countries')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('OrganizationBranchCountry', 'List Organization Branch Country'),'url'=>array('index')),
	array('label'=>Yii::t('OrganizationBranchCountry', 'Manage Organization Branch Country'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('OrganizationBranchCountry', 'Create Organization Branch Country')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>