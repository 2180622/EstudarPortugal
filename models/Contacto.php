<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Contacto".
 *
 * @property int $idContacto
 * @property string $nome
 * @property int|null $telefone
 * @property int|null $telemovel
 * @property string|null $email
 * @property int|null $fax
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
            [['telefone', 'telemovel', 'fax'], 'integer'],
            [['nome', 'email'], 'string', 'max' => 255],
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
            'telefone' => 'Telefone',
            'telemovel' => 'Telemovel',
            'email' => 'Email',
            'fax' => 'Fax',
        ];
    }
}
