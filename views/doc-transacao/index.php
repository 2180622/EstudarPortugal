<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doc Transacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-transacao-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Doc Transacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDocTransacao',
            'descricao',
            'valorRecebido',
            'dataOperacao',
            'dataRecebido',
            //'verificacao',
            //'imagem',
            //'idConta',
            //'idFase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
