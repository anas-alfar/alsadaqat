<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Mail Templates')=>array('index'),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>Yii::t('MailTemplate', 'List Mail Template'),'url'=>array('index')),
	array('label'=>Yii::t('MailTemplate', 'Manage Mail Template'),'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('MailTemplate', 'Create Mail Template')?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>