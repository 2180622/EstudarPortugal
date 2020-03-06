<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Administrador".
 *
 * @property int $idAdmin
 * @property string $nome
 * @property string $apelido
 * @property string $email
 * @property string|null $fotografia
 * @property int $telefone1
 * @property int|null $telefone2
 * @property string $dataRegist
 * @property int $deleted_at
 *
 * @property User[] $users
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Administrador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'apelido', 'email', 'telefone1'], 'required'],
            [['telefone1', 'telefone2', 'deleted_at'], 'integer'],
            [['dataRegist'], 'safe'],
            [['nome', 'apelido', 'email', 'fotografia'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAdmin' => 'Id Admin',
            'nome' => 'Nome',
            'apelido' => 'Apelido',
            'email' => 'Email',
            'dataNasc' => 'Data de Nascimento',
            'fotografia' => 'Fotografia',
            'telefone1' => 'Telefone1',
            'telefone2' => 'Telefone2',
            'dataRegist' => 'Data Regist',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['idAdministrador' => 'idAdmin']);
    }
}
