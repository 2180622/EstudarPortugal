<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PagoResponsabilidade */

$this->title = 'Create Pago Responsabilidade';
$this->params['breadcrumbs'][] = ['label' => 'Pago Responsabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-responsabilidade-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
