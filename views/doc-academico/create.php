<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocAcademico */

$this->title = 'Create Doc Academico';
$this->params['breadcrumbs'][] = ['label' => 'Doc Academicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-academico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
