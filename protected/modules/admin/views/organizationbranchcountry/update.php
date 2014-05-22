<?php
$this->breadcrumbs=array(
	'Organization Branch Countries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List OrganizationBranchCountry','url'=>array('index')),
	array('label'=>'Create OrganizationBranchCountry','url'=>array('create')),
	array('label'=>'View OrganizationBranchCountry','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage OrganizationBranchCountry','url'=>array('admin')),
);
?>

<h1>Update OrganizationBranchCountry <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>