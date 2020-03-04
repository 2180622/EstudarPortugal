<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "PagoResponsabilidade".
 *
 * @property int $idPagoResp
 * @property string $data
 * @property string $nomeAutor
 * @property string $imagem
 * @property int $idFase
 *
 * @property Fase $idFase0
 */
class PagoResponsabilidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'PagoResponsabilidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['data', 'nomeAutor', 'imagem', 'idFase'], 'required'],
            [['data'], 'safe'],
            [['idFase'], 'integer'],
            [['nomeAutor', 'imagem'], 'string', 'max' => 255],
            [['idFase'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['idFase' => 'idFase']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idPagoResp' => 'Id Pago Resp',
            'data' => 'Data',
            'nomeAutor' => 'Nome Autor',
            'imagem' => 'Imagem',
            'idFase' => 'Id Fase',
        ];
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
