<?php

use kartik\editable\Editable;
use app\models\TblContact;

$model = TblContact::findOne(3);

echo Editable::widget([

    'model' => $model,
    'size' => 'md',
    'attribute' => 'name',
    'inputType' => Editable::INPUT_TEXT,
    'options'=> [
      'id' => 'fakeDisplay'
    ]
]);

?>


