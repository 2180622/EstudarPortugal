<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Agente".
 *
 * @property int $idAgente
 * @property string $nome
 * @property string $apelido
 * @property string $email
 * @property string $dataNasc
 * @property string|null $fotografia
 * @property string $morada
 * @property string $pais
 * @property string $NIF
 * @property int $telefoneW
 * @property int|null $telefone2
 * @property string $tipo
 * @property string $dataRegist
 * @property int $deleted_at
 *
 * @property Produto[] $produtos
 * @property Produto[] $produtos0
 * @property User[] $users
 */
class Agente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Agente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'apelido', 'email', 'dataNasc', 'morada', 'pais', 'NIF', 'telefoneW', 'tipo'], 'required'],
            [['dataNasc', 'dataRegist'], 'safe'],
            [['telefoneW', 'telefone2', 'deleted_at'], 'integer'],
            [['tipo'], 'string'],
            [['nome', 'apelido', 'email', 'fotografia', 'morada', 'pais', 'NIF'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['NIF'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idAgente' => 'Id Agente',
            'nome' => 'Nome',
            'apelido' => 'Apelido',
            'email' => 'Email',
            'dataNasc' => 'Data Nasc',
            'fotografia' => 'Fotografia',
            'morada' => 'Morada',
            'pais' => 'Pais',
            'NIF' => 'Nif',
            'telefoneW' => 'Telefone W',
            'telefone2' => 'Telefone2',
            'tipo' => 'Tipo',
            'dataRegist' => 'Data Regist',
            'deleted_at' => 'Deleted At',
        ];
    }

    /**
     * Gets query for [[Produtos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['idAgente' => 'idAgente']);
    }

    /**
     * Gets query for [[Produtos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos0()
    {
        return $this->hasMany(Produto::className(), ['idSubAgente' => 'idAgente']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['idAgente' => 'idAgente']);
    }
}
