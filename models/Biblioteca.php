<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Biblioteca".
 *
 * @property int $idBiblioteca
 * @property string $nome
 * @property string $imagem
 */
class Biblioteca extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Biblioteca';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'imagem'], 'required'],
            [['nome', 'imagem'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBiblioteca' => 'Id Biblioteca',
            'nome' => 'Nome',
            'imagem' => 'Imagem',
        ];
    }
}
