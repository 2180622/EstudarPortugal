<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "DocTransacao".
 *
 * @property int $idDocTransacao
 * @property string $descricao
 * @property float $valorRecebido
 * @property string $dataOperacao
 * @property string|null $dataRecebido
 * @property int $verificacao
 * @property string $imagem
 * @property int $idConta
 * @property int $idFase
 *
 * @property Conta $idConta0
 * @property Fase $idFase0
 */
class DocTransacao extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'DocTransacao';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'dataOperacao', 'imagem', 'idConta', 'idFase'], 'required'],
            [['valorRecebido'], 'number'],
            [['dataOperacao', 'dataRecebido'], 'safe'],
            [['verificacao', 'idConta', 'idFase'], 'integer'],
            [['descricao', 'imagem'], 'string', 'max' => 255],
            [['idConta'], 'exist', 'skipOnError' => true, 'targetClass' => Conta::className(), 'targetAttribute' => ['idConta' => 'IdConta']],
            [['idFase'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['idFase' => 'idFase']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idDocTransacao' => 'Id Doc Transacao',
            'descricao' => 'Descricao',
            'valorRecebido' => 'Valor Recebido',
            'dataOperacao' => 'Data Operacao',
            'dataRecebido' => 'Data Recebido',
            'verificacao' => 'Verificacao',
            'imagem' => 'Imagem',
            'idConta' => 'Id Conta',
            'idFase' => 'Id Fase',
        ];
    }

    /**
     * Gets query for [[IdConta0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdConta0()
    {
        return $this->hasOne(Conta::className(), ['IdConta' => 'idConta']);
    }

    /**
     * Gets query for [[IdFase0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdFase0()
    {
        return $this->hasOne(Fase::className(), ['idFase' => 'idFase']);
    }
}
