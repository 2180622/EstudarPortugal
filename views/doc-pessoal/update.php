<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPessoal */

$this->title = 'Update Doc Pessoal: ' . $model->idDocPessoal;
$this->params['breadcrumbs'][] = ['label' => 'Doc Pessoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDocPessoal, 'url' => ['view', 'id' => $model->idDocPessoal]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doc-pessoal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
