<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Agente */

$this->title = 'Update Agente: ' . $model->idAgente;
$this->params['breadcrumbs'][] = ['label' => 'Agentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idAgente, 'url' => ['view', 'id' => $model->idAgente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
