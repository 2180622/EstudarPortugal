<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsabilidade */

$this->title = 'Create Responsabilidade';
$this->params['breadcrumbs'][] = ['label' => 'Responsabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsabilidade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
