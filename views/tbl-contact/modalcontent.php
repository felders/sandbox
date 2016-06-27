<?php

use kartik\sortable\Sortable;


echo Sortable::widget([
    'connected'=>true,
    'items'=>[
        ['content'=>'From Item 1'],
        ['content'=>'From Item 2'],
        ['content'=>'From Item 3'],
        ['content'=>'From Item 4'],
    ]
]);
echo Sortable::widget([
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

