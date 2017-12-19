<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_cuota_taller".
 *
 * @property integer $id
 * @property integer $id_cuota
 * @property integer $id_taller
 * @property string $nombre
 * @property integer $obligatoria
 * @property string $comentario
 * @property integer $tipo_periodo
 *
 * @property Cuota $idCuota
 * @property Taller $idTaller
 */
class CuotaTaller extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_cuota_taller';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_cuota', 'id_taller', 'obligatoria', 'tipo_periodo'], 'integer'],
            [['nombre'], 'string', 'max' => 150],
            [['comentario'], 'string', 'max' => 300],
            [['id_cuota'], 'exist', 'skipOnError' => true, 'targetClass' => Cuota::className(), 'targetAttribute' => ['id_cuota' => 'id']],
            [['id_taller'], 'exist', 'skipOnError' => true, 'targetClass' => Taller::className(), 'targetAttribute' => ['id_taller' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_cuota' => 'Id Cuota',
            'id_taller' => 'Id Taller',
            'nombre' => 'Nombre',
            'obligatoria' => 'Obligatoria',
            'comentario' => 'Comentario',
            'tipo_periodo' => 'Tipo Periodo',
        ];
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
    public function getIdTaller()
    {
        return $this->hasOne(Taller::className(), ['id' => 'id_taller']);
    }
}
