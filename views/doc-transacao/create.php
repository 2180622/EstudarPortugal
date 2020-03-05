<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocTransacao */

$this->title = 'Create Doc Transacao';
$this->params['breadcrumbs'][] = ['label' => 'Doc Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-transacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
