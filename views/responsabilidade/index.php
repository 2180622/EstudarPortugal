<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Responsabilidades';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsabilidade-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Responsabilidade', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idResponsabilidade',
            'descricao',
            'valorCliente',
            'valorAgente',
            'valorSubAgente',
            //'valorUniversidade1',
            //'valorUniversidade2',
            //'imagem',
            //'dataPublicacao',
            //'idFase',
            //'idConta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
