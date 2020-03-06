<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FaseStock */

$this->title = 'Create Fase Stock';
$this->params['breadcrumbs'][] = ['label' => 'Fase Stocks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fase-stock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
