<?php

use kartik\sortable\Sortable;


echo Sortable::widget([
    'id' => 'test-1',
    'connected'=>true,
    'items'=>[
        ['content'=>'From Item 1'],
        ['content'=>'From Item 2'],
        ['content'=>'From Item 3'],
        ['content'=>'From Item 4'],
    ]
]);
echo Sortable::widget([
    'id' => 'test-2',
    'connected'=>true,
    'itemOptions'=>['class'=>'alert alert-warning'],
    'items'=>[
        ['content'=>'To Item 1'],
        ['content'=>'To Item 2'],
        ['content'=>'To Item 3'],
        ['content'=>'To Item 4'],
    ]
]);

?>

