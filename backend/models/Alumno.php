<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_alumno".
 *
 * @property integer $id
 * @property string $numero_registro
 * @property string $nombre
 * @property string $fecha_nacimiento
 * @property string $fecha_alta
 * @property integer $sexo
 * @property string $direccion
 * @property string $nacionalidad
 * @property string $estado
 * @property string $codigo_postal
 * @property string $fecha_baja
 * @property string $correo_electronico
 * @property string $telefono_movil
 * @property string $telefono_casa
 * @property string $nombre_padre
 * @property integer $edad_padre
 * @property string $ocupacion_padre
 * @property integer $tel_padre
 * @property string $nombre_madre
 * @property integer $edad_madre
 * @property string $ocupacion_madre
 * @property integer $tel_madre
 * @property string $fecha_ingreso
 * @property string $lugar_nacimiento
 * @property integer $tel_emergencia
 * @property string $escuela_procedencia
 * @property string $alergia_enfermedad
 * @property string $tipo_sangineo
 * @property string $afiliacion_seguro
 * @property string $curp
 * @property string $taller_inscribe
 */
class Alumno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_alumno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fecha_nacimiento', 'fecha_alta', 'fecha_ingreso'], 'safe'],
            [['sexo', 'edad_padre', 'tel_padre', 'edad_madre', 'tel_madre', 'tel_emergencia'], 'integer'],
            [['nombre_padre', 'edad_padre', 'ocupacion_padre', 'tel_padre', 'nombre_madre', 'edad_madre', 'ocupacion_madre', 'tel_madre', 'fecha_ingreso', 'lugar_nacimiento', 'tel_emergencia', 'escuela_procedencia', 'alergia_enfermedad', 'tipo_sangineo', 'afiliacion_seguro', 'curp', 'taller_inscribe'], 'required'],
            [['numero_registro', 'nombre', 'tipo_sangineo'], 'string', 'max' => 100],
            [['direccion', 'correo_electronico'], 'string', 'max' => 300],
            [['nacionalidad', 'estado', 'codigo_postal', 'fecha_baja', 'telefono_movil', 'telefono_casa'], 'string', 'max' => 45],
            [['nombre_padre', 'ocupacion_padre', 'nombre_madre', 'ocupacion_madre', 'lugar_nacimiento', 'escuela_procedencia', 'alergia_enfermedad', 'afiliacion_seguro'], 'string', 'max' => 200],
            [['curp'], 'string', 'max' => 20],
            [['taller_inscribe'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'numero_registro' => 'Numero Registro',
            'nombre' => 'Nombre',
            'fecha_nacimiento' => 'Fecha de nacimiento',
            'fecha_alta' => 'Fecha Alta',
            'sexo' => 'Sexo',
            'direccion' => 'Domicilio',
            'nacionalidad' => 'Nacionalidad',
            'estado' => 'Estado',
            'codigo_postal' => 'Codigo Postal',
            'fecha_baja' => 'Fecha Baja',
            'correo_electronico' => 'Correo Electronico',
            'telefono_movil' => 'Telefono Movil',
            'telefono_casa' => 'Telefono de casa',
            'nombre_padre' => 'Nombre del Padre',
            'edad_padre' => 'Edad',
            'ocupacion_padre' => 'Ocupacion',
            'tel_padre' => 'Telefono',
            'nombre_madre' => 'Nombre de la Madre',
            'edad_madre' => 'Edad',
            'ocupacion_madre' => 'Ocupacion',
            'tel_madre' => 'Telefono',
            'fecha_ingreso' => 'Fecha de ingreso',
            'lugar_nacimiento' => 'Lugar de nacimiento',
            'tel_emergencia' => 'En caso de Emergencia llamar a:',
            'escuela_procedencia' => 'Nombre de la escuela donde estudia actualmente',
            'alergia_enfermedad' => 'Alergia o enfermedad cronica',
            'tipo_sangineo' => 'Tipo Sangineo',
            'afiliacion_seguro' => 'Esta afiliado a:',
            'curp' => 'Curp',
            'taller_inscribe' => 'Taller al que se inscribe o reinscribe el alumno(A)',
        ];
    }
}
