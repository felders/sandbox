<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TblContact */

$this->title = 'Create Tbl Contact';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-contact-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
