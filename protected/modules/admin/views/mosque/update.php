<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mosques')=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('Mosque', 'List Mosque'),'url'=>array('index')),
	array('label'=>Yii::t('Mosque', 'Create Mosque'),'url'=>array('create')),
	array('label'=>Yii::t('Mosque', 'View Mosque'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('Mosque', 'Manage Mosque'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('Mosque', 'Update Mosque')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>