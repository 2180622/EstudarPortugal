<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcademico */

$this->title = 'Update Doc Academico: ' . $model->idDocAcademico;
$this->params['breadcrumbs'][] = ['label' => 'Doc Academicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDocAcademico, 'url' => ['view', 'id' => $model->idDocAcademico]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="doc-academico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
