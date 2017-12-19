<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_instructor".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $direccion
 * @property string $numero_cedula
 * @property string $numero_registro
 * @property string $fecha_alta
 * @property string $fecha_baja
 * @property string $url_foto
 * @property string $url_fb
 * @property string $url_tw
 * @property string $url_cv
 * @property integer $sexo
 * @property integer $disponible
 * @property integer $localidad
 *
 * @property Taller[] $tallers
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_instructor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_nacimiento', 'fecha_alta', 'fecha_baja'], 'safe'],
            [['sexo', 'disponible', 'localidad'], 'integer'],
            [['nombre'], 'string', 'max' => 200],
            [['direccion', 'url_foto', 'url_fb', 'url_tw', 'url_cv'], 'string', 'max' => 300],
            [['numero_cedula', 'numero_registro'], 'string', 'max' => 45],
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
            'fecha_nacimiento' => 'Fecha Nacimiento',
            'direccion' => 'Direccion',
            'numero_cedula' => 'Numero Cedula',
            'numero_registro' => 'Numero Registro',
            'fecha_alta' => 'Fecha Alta',
            'fecha_baja' => 'Fecha Baja',
            'url_foto' => 'Url Foto',
            'url_fb' => 'Url Fb',
            'url_tw' => 'Url Tw',
            'url_cv' => 'Url Cv',
            'sexo' => 'Sexo',
            'disponible' => 'Disponible',
            'localidad' => 'Localidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTallers()
    {
        return $this->hasMany(Taller::className(), ['id_instructor' => 'id']);
    }
}
