<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pago Responsabilidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pago-responsabilidade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pago Responsabilidade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idPagoResp',
            'data',
            'nomeAutor',
            'imagem',
            'idFase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
