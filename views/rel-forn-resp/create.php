<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RelFornResp */

$this->title = 'Create Rel Forn Resp';
$this->params['breadcrumbs'][] = ['label' => 'Rel Forn Resps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rel-forn-resp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
