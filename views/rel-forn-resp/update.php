<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RelFornResp */

$this->title = 'Update Rel Forn Resp: ' . $model->idRelacao;
$this->params['breadcrumbs'][] = ['label' => 'Rel Forn Resps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idRelacao, 'url' => ['view', 'id' => $model->idRelacao]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rel-forn-resp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
