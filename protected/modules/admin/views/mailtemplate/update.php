<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Templates')=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>Yii::t('MailTemplate', 'List Mail Template'),'url'=>array('index')),
	array('label'=>Yii::t('MailTemplate', 'Create Mail Template'),'url'=>array('create')),
	array('label'=>Yii::t('MailTemplate', 'View Mail Template'),'url'=>array('view','id'=>$model->id)),
	array('label'=>Yii::t('MailTemplate', 'Manage Mail Template'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailTemplate', 'Update Mail Template')?> <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>