<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Responsabilidade */

$this->title = $model->idResponsabilidade;
$this->params['breadcrumbs'][] = ['label' => 'Responsabilidades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="responsabilidade-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idResponsabilidade], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idResponsabilidade], [
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
            'idResponsabilidade',
            'descricao',
            'valorCliente',
            'valorAgente',
            'valorSubAgente',
            'valorUniversidade1',
            'valorUniversidade2',
            'imagem',
            'dataPublicacao',
            'idFase',
            'idConta',
        ],
    ]) ?>

</div>
