<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TblContact */

$this->title = 'Update Tbl Contact: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
