<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Responsabilidade".
 *
 * @property int $idResponsabilidade
 * @property string $descricao
 * @property float $valorCliente
 * @property float $valorAgente
 * @property float|null $valorSubAgente
 * @property float $valorUniversidade1
 * @property float|null $valorUniversidade2
 * @property string $imagem
 * @property string $dataPublicacao
 * @property int $idFase
 * @property int $idConta
 *
 * @property RelFornResp[] $relFornResps
 * @property Fase $idFase0
 * @property Conta $idConta0
 */
class Responsabilidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Responsabilidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'valorCliente', 'valorAgente', 'valorUniversidade1', 'imagem', 'idFase', 'idConta'], 'required'],
            [['valorCliente', 'valorAgente', 'valorSubAgente', 'valorUniversidade1', 'valorUniversidade2'], 'number'],
            [['dataPublicacao'], 'safe'],
            [['idFase', 'idConta'], 'integer'],
            [['descricao', 'imagem'], 'string', 'max' => 255],
            [['idFase'], 'exist', 'skipOnError' => true, 'targetClass' => Fase::className(), 'targetAttribute' => ['idFase' => 'idFase']],
            [['idConta'], 'exist', 'skipOnError' => true, 'targetClass' => Conta::className(), 'targetAttribute' => ['idConta' => 'IdConta']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idResponsabilidade' => 'Id Responsabilidade',
            'descricao' => 'Descricao',
            'valorCliente' => 'Valor Cliente',
            'valorAgente' => 'Valor Agente',
            'valorSubAgente' => 'Valor Sub Agente',
            'valorUniversidade1' => 'Valor Universidade1',
            'valorUniversidade2' => 'Valor Universidade2',
            'imagem' => 'Imagem',
            'dataPublicacao' => 'Data Publicacao',
            'idFase' => 'Id Fase',
            'idConta' => 'Id Conta',
        ];
    }

    /**
     * Gets query for [[RelFornResps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelFornResps()
    {
        return $this->hasMany(RelFornResp::className(), ['idResponsabilidade' => 'idResponsabilidade']);
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

    /**
     * Gets query for [[IdConta0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdConta0()
    {
        return $this->hasOne(Conta::className(), ['IdConta' => 'idConta']);
    }
}
