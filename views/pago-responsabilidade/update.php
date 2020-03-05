<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PagoResponsabilidade */

$this->title = 'Update Pago Responsabilidade: ' . $model->idPagoResp;
$this->params['breadcrumbs'][] = ['label' => 'Pago Responsabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idPagoResp, 'url' => ['view', 'id' => $model->idPagoResp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pago-responsabilidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
