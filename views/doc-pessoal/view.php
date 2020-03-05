<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\DocPessoal */

$this->title = $model->idDocPessoal;
$this->params['breadcrumbs'][] = ['label' => 'Doc Pessoals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="doc-pessoal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idDocPessoal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idDocPessoal], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idDocPessoal',
            'nome',
            'apelido',
            'tipo',
            'imagem',
            'numDoc',
            'dataValidade',
            'pais',
            'morada',
            'verificacao',
            'dataPublicacao',
            'idFase',
        ],
    ]) ?>

</div>
