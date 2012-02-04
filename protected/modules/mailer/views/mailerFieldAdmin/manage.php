<?php
$this->page_title = 'Управление генерируемыми полями';

$this->widget('AdminGrid', array(
	'id' => 'mailer-field-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'code',
		'name',
		'value',
		array(
			'class'=>'CButtonColumn',
            'template' => '{update} {delete}'
		),
	),
)); 
