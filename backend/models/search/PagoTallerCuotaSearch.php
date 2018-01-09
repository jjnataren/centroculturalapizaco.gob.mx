<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PagoTallerCuota;

/**
 * PagoTallerCuotaSearch represents the model behind the search form about `backend\models\PagoTallerCuota`.
 */
class PagoTallerCuotaSearch extends PagoTallerCuota
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_taller_imp', 'id_cuota', 'id_alumno'], 'integer'],
            [['monto', 'concepto', 'fecha_pago', 'metodo_pago', 'comentario'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = PagoTallerCuota::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_taller_imp' => $this->id_taller_imp,
            'id_cuota' => $this->id_cuota,
            'id_alumno' => $this->id_alumno,
            'fecha_pago' => $this->fecha_pago,
        ]);

        $query->andFilterWhere(['like', 'monto', $this->monto])
            ->andFilterWhere(['like', 'concepto', $this->concepto])
            ->andFilterWhere(['like', 'metodo_pago', $this->metodo_pago])
            ->andFilterWhere(['like', 'comentario', $this->comentario]);

        return $dataProvider;
    }
    
    
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function searchInscripcion($params,$id_taller)
    {
        $query = PagoTallerCuota::findBySql('select * from tbl_Pago_taller_cuota where id not in (select id_pago from tbl_inscripcion)');
        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        
        $query->andFilterWhere([
            'id' => $this->id,
            'id_taller_imp' => $this->id_taller_imp,
            'id_cuota' => $this->id_cuota,
            'id_alumno' => $this->id_alumno,
            'fecha_pago' => $this->fecha_pago,
        ]);
        
        $query->andFilterWhere(['like', 'monto', $this->monto])
        ->andFilterWhere(['like', 'concepto', $this->concepto])
        ->andFilterWhere(['like', 'metodo_pago', $this->metodo_pago])
        ->andFilterWhere(['like', 'comentario', $this->comentario]);
        
        return $dataProvider;
    }
}
