<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Universidade */

$this->title = 'Update Universidade: ' . $model->idUniversidade;
$this->params['breadcrumbs'][] = ['label' => 'Universidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUniversidade, 'url' => ['view', 'id' => $model->idUniversidade]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="universidade-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
