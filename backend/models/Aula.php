<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_aula".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $disponible
 * @property integer $numero_max_personas
 *
 * @property Taller[] $tallers
 */
class Aula extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_aula';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disponible', 'numero_max_personas'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'disponible' => 'Disponible',
            'numero_max_personas' => 'Numero Max Personas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTallers()
    {
        return $this->hasMany(Taller::className(), ['id_aula' => 'id']);
    }
}
