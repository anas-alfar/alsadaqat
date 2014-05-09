<?php
$this->breadcrumbs=array(
	'Beneficiary Relations',
);

$this->menu=array(
	array('label'=>'Create BeneficiaryRelation','url'=>array('create')),
	array('label'=>'Manage BeneficiaryRelation','url'=>array('admin')),
);
?>

<h1>Beneficiary Relations</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
