<?php

\kartik\editable\EditableAsset::register($this);
\kartik\editable\EditablePjaxAsset::register($this);
\kartik\base\WidgetAsset::register($this);
\yii\widgets\ActiveFormAsset::register($this);
\kartik\popover\PopoverXAsset::register($this);

use yii\bootstrap\Tabs;

$this->registerJs(<<<JS
$("#add").on("click", function(e){
	
		$.get("index.php?r=tbl-contact/get-new-tab&id=3", function (content) {
			$("#myveryownID").html(content);
			
			initEditablePopover("fakeDisplaynew-targ");
		
		});
});

JS
);
?>

<?php

echo Tabs::widget([
	'items' => [
		[
			'label' => 'One',
			'content' => 'Rush second tab',
			'active' => true
		],
		[
			'label' => 'Two',
			'content' => 'test',
            'options' => ['id' => 'myveryownID'],
        ],
        [
			'label' => 'Example',
			'url' => 'http://www.example.com',
		],
        [
			'label' => 'Dropdown',
			'items' => [
				[
					'label' => 'DropdownA',
					'content' => 'DropdownA, Anim pariatur cliche...',
				],
				[
					'label' => 'DropdownB',
					'content' => 'DropdownB, Anim pariatur cliche...',
				],
			],
		],
    ],
]);

//echo file_get_contents('http://sandbox.dev/index.php?r=tbl-contact/get-new-tab&id=3');
?>

<button id="add">test</button>
