<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_pago_taller_cuota".
 *
 * @property integer $id
 * @property integer $id_taller_imp
 * @property integer $id_cuota_taller_imp
 * @property integer $id_cuota
 * @property string $monto
 * @property integer $id_alumno
 * @property string $concepto
 * @property string $fecha_pago
 * @property string $metodo_pago
 * @property string $comentario
 *
 * @property Inscripcion[] $inscripcions
 * @property Alumno $idAlumno
 * @property Cuota $idCuota
 * @property CuotaTallerImp $idCuotaTallerImp
 * @property TallerImp $idTallerImp
 */
class PagoTallerCuota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_pago_taller_cuota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_taller_imp', 'id_cuota_taller_imp', 'id_cuota', 'id_alumno'], 'integer'],
            [['fecha_pago'], 'safe'],
            [['monto', 'concepto', 'metodo_pago', 'comentario'], 'string', 'max' => 45],
            [['id_alumno'], 'exist', 'skipOnError' => true, 'targetClass' => Alumno::className(), 'targetAttribute' => ['id_alumno' => 'id']],
            [['id_cuota'], 'exist', 'skipOnError' => true, 'targetClass' => Cuota::className(), 'targetAttribute' => ['id_cuota' => 'id']],
            [['id_cuota_taller_imp'], 'exist', 'skipOnError' => true, 'targetClass' => CuotaTallerImp::className(), 'targetAttribute' => ['id_cuota_taller_imp' => 'id']],
            [['id_taller_imp'], 'exist', 'skipOnError' => true, 'targetClass' => TallerImp::className(), 'targetAttribute' => ['id_taller_imp' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_taller_imp' => 'Id Taller Imp',
            'id_cuota_taller_imp' => 'Id Cuota Taller Imp',
            'id_cuota' => 'Id Cuota',
            'monto' => 'Monto',
            'id_alumno' => 'Id Alumno',
            'concepto' => 'Concepto',
            'fecha_pago' => 'Fecha Pago',
            'metodo_pago' => 'Metodo Pago',
            'comentario' => 'Comentario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInscripcions()
    {
        return $this->hasMany(Inscripcion::className(), ['id_pago' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAlumno()
    {
        return $this->hasOne(Alumno::className(), ['id' => 'id_alumno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCuota()
    {
        return $this->hasOne(Cuota::className(), ['id' => 'id_cuota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCuotaTallerImp()
    {
        return $this->hasOne(CuotaTallerImp::className(), ['id' => 'id_cuota_taller_imp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTallerImp()
    {
        return $this->hasOne(TallerImp::className(), ['id' => 'id_taller_imp']);
    }
}
