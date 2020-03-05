<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DocPessoal */

$this->title = 'Create Doc Pessoal';
$this->params['breadcrumbs'][] = ['label' => 'Doc Pessoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-pessoal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
