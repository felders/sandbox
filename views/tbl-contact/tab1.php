<?php

use kartik\editable\Editable;
use app\models\TblContact;

$model = TblContact::findOne(1);

echo Editable::widget([

    'model' => $model,
    'size' => 'md',
    'attribute' => 'name',
    'inputType' => Editable::INPUT_TEXT,
    'options'=> [
      'id' => 'fakeDisplay1'
    ],
]);

?>


