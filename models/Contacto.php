<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contacto".
 *
 * @property int $idContacto
 * @property string $nome
 * @property string|null $fotografia
 * @property int|null $telefone1
 * @property int|null $telefone2
 * @property string|null $email
 * @property int|null $fax
 * @property string|null $observacao
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Contacto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
            [['telefone1', 'telefone2', 'fax'], 'integer'],
            [['observacao'], 'string'],
            [['nome', 'fotografia', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idContacto' => 'Id Contacto',
            'nome' => 'Nome',
            'fotografia' => 'Fotografia',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'email' => 'Email',
            'fax' => 'Fax',
            'observacao' => 'Observacao',
        ];
    }
}
