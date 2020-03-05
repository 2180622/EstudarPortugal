<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rel Forn Resps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rel-forn-resp-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rel Forn Resp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idRelacao',
            'valor',
            'idResponsabilidade',
            'idFornecedor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
