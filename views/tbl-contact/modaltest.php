This is a modal test.  Drag and drop doesn't work inside the modal.


<?php
use yii\bootstrap\Modal;

Modal::begin([
    'header' => 'test',
    'id' => 'testModal',
    'toggleButton' => ['label' => 'Open Modal']
]);
echo $this->render('modalcontent');

Modal::end();

?>
