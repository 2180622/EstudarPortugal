<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Conta".
 *
 * @property int $idConta
 * @property string $descricao
 * @property string $local
 * @property int $numConta
 * @property string $IBAN
 * @property string $instituicao
 * @property int $telefone
 * @property string|null $obsConta
 * @property int $deleted_at
 *
 * @property DocTransacao[] $docTransacaos
 * @property Responsabilidade[] $responsabilidades
 */
class Conta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Conta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao', 'local', 'numConta', 'IBAN', 'instituicao', 'telefone'], 'required'],
            [['numConta', 'telefone', 'deleted_at'], 'integer'],
            [['obsConta'], 'string'],
            [['descricao', 'local', 'IBAN', 'instituicao'], 'string', 'max' => 255],
            [['numConta'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idConta' => 'Id Conta',
            'descricao' => 'Descricao',
            'local' => 'Local',
            'numConta' => 'Num Conta',
            'IBAN' => 'Iban',
            'instituicao' => 'Instituicao',
            'telefone' => 'Telefone',
            'obsConta' => 'Obs Conta',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[DocTransacaos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocTransacaos()
    {
        return $this->hasMany(DocTransacao::className(), ['idConta' => 'IdConta']);
    }

    /**
     * Gets query for [[Responsabilidades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsabilidades()
    {
        return $this->hasMany(Responsabilidade::className(), ['idConta' => 'IdConta']);
    }
}
