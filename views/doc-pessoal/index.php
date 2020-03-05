<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Doc Pessoals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="doc-pessoal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Doc Pessoal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idDocPessoal',
            'nome',
            'apelido',
            'tipo',
            'imagem',
            //'numDoc',
            //'dataValidade',
            //'pais',
            //'morada',
            //'verificacao',
            //'dataPublicacao',
            //'idFase',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
