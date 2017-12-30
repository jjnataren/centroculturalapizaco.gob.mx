<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_taller".
 *
 * @property integer $id
 * @property integer $id_instructor
 * @property integer $id_aula
 * @property string $nombre
 * @property string $descripcion
 * @property string $descripcion_temario
 * @property string $numero_personas
 * @property string $imagen_url
 * @property string $temario_url
 * @property string $fecha_creacion
 * @property integer $creado_por
 * @property integer $duracion_mes
 * @property integer $duracion_hora
 * @property integer $lunes
 * @property integer $martes
 * @property integer $miercoles
 * @property integer $jueves
 * @property integer $viernes
 * @property integer $sabado
 * @property integer $domingo
 * @property string $hora_inicio
 * @property integer $disponible
 *
 * @property CuotaTaller[] $cuotaTallers
 * @property Aula $idAula
 * @property Instructor $idInstructor
 * @property TallerImp[] $tallerImps
 */
class Taller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_taller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_instructor', 'id_aula', 'creado_por', 'duracion_mes', 'duracion_hora', 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo', 'disponible'], 'integer'],
            [['fecha_creacion', 'hora_inicio'], 'safe'],
            [['nombre', 'descripcion', 'descripcion_temario', 'numero_personas'], 'string', 'max' => 45],
            [['imagen_url', 'temario_url'], 'string', 'max' => 300],
            [['id_aula'], 'exist', 'skipOnError' => true, 'targetClass' => Aula::className(), 'targetAttribute' => ['id_aula' => 'id']],
            [['id_instructor'], 'exist', 'skipOnError' => true, 'targetClass' => Instructor::className(), 'targetAttribute' => ['id_instructor' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_instructor' => 'Id Instructor',
            'id_aula' => 'Id Aula',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
            'descripcion_temario' => 'Descripcion Temario',
            'numero_personas' => 'Numero Personas',
            'imagen_url' => 'Imagen Url',
            'temario_url' => 'Temario Url',
            'fecha_creacion' => 'Fecha Creacion',
            'creado_por' => 'Creado Por',
            'duracion_mes' => 'Duracion Mes',
            'duracion_hora' => 'Duracion Hora',
            'lunes' => 'Lunes',
            'martes' => 'Martes',
            'miercoles' => 'Miercoles',
            'jueves' => 'Jueves',
            'viernes' => 'Viernes',
            'sabado' => 'Sabado',
            'domingo' => 'Domingo',
            'hora_inicio' => 'Hora Inicio',
            'disponible' => 'Disponible',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuotaTallers()
    {
        return $this->hasMany(CuotaTaller::className(), ['id_taller' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAula()
    {
        return $this->hasOne(Aula::className(), ['id' => 'id_aula']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdInstructor()
    {
        return $this->hasOne(Instructor::className(), ['id' => 'id_instructor']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTallerImps()
    {
        return $this->hasMany(TallerImp::className(), ['id_curso_base' => 'id']);
    }
}
