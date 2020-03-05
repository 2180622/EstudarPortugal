<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Fase */

$this->title = 'Update Fase: ' . $model->idFase;
$this->params['breadcrumbs'][] = ['label' => 'Fases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idFase, 'url' => ['view', 'id' => $model->idFase]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fase-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
