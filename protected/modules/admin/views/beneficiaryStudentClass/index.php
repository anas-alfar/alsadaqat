<?php
$this->breadcrumbs=array(
	'Beneficiary Student Classes',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryStudentClass','url'=>array('create')),
	array('label'=>'Manage BeneficiaryStudentClass','url'=>array('admin')),
);
?>

<h1>Beneficiary Student Classes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
