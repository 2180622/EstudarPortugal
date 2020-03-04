<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Universidade".
 *
 * @property int $idUniversidade
 * @property string $nome
 * @property string $morada
 * @property int $telefone
 * @property string $email
 * @property int $NIF
 * @property int $IBAN
 * @property string|null $obsContactos
 * @property string|null $obsCursos
 * @property string|null $obsCandidaturas
 * @property int $deleted_at
 *
 * @property Produto[] $produtos
 * @property Produto[] $produtos0
 */
class Universidade extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Universidade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'morada', 'telefone', 'email', 'NIF', 'IBAN'], 'required'],
            [['telefone', 'NIF', 'IBAN', 'deleted_at'], 'integer'],
            [['obsContactos', 'obsCursos', 'obsCandidaturas'], 'string'],
            [['nome', 'morada', 'email'], 'string', 'max' => 255],
            [['NIF'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idUniversidade' => 'Id Universidade',
            'nome' => 'Nome',
            'morada' => 'Morada',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'NIF' => 'Nif',
            'IBAN' => 'Iban',
            'obsContactos' => 'Obs Contactos',
            'obsCursos' => 'Obs Cursos',
            'obsCandidaturas' => 'Obs Candidaturas',
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
        return $this->hasMany(Produto::className(), ['idUniversidade1' => 'idUniversidade']);
    }

    /**
     * Gets query for [[Produtos0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos0()
    {
        return $this->hasMany(Produto::className(), ['idUniversidade2' => 'idUniversidade']);
    }
}
