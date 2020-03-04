<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Fornecedor".
 *
 * @property int $idFornecedor
 * @property string $nome
 * @property string $morada
 * @property string $descricao
 * @property int $deleted_at
 *
 * @property RelFornResp[] $relFornResps
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Fornecedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'descricao'], 'required'],
            [['descricao'], 'string'],
            [['deleted_at'], 'integer'],
            [['nome', 'morada'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idFornecedor' => 'Id Fornecedor',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'descricao' => 'Descricao',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[RelFornResps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRelFornResps()
    {
        return $this->hasMany(RelFornResp::className(), ['idFornecedor' => 'IdFornecedor']);
    }
}
