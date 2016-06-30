<?php

use kartik\editable\Editable;
use app\models\TblContact;

$model = TblContact::findOne(4);

echo Editable::widget([

    'model' => $model,
    'size' => 'md',
    'attribute' => 'name',
    'pjaxContainerId' => 'pjax-container',
    'inputType' => Editable::INPUT_TEXT,
    'options'=> [
        'id' => 'fakeDisplay2'
    ]
]);

?>


