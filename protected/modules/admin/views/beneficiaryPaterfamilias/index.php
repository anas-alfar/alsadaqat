<?php
$this->breadcrumbs=array(
	'Beneficiary Paterfamiliases',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryPaterfamilias','url'=>array('create')),
	array('label'=>'Manage BeneficiaryPaterfamilias','url'=>array('admin')),
);
?>

<h1>Beneficiary Paterfamiliases</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
