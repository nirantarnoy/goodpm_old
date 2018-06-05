<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Workreq;

/**
 * WorkreqSearch represents the model behind the search form of `backend\models\Workreq`.
 */
class WorkreqSearch extends Workreq
{
    public $globalSearch;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'work_req_date', 'apporve_by', 'apporve_date', 'work_type', 'work_priority', 'work_title', 'request_approve', 'problem_date', 'plant_id', 'department_id', 'section_id', 'location_id', 'asset_id', 'status', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['work_req_no', 'name', 'description', 'apporve_note', 'request_detail'], 'safe'],
            [['globalSearch'],'string'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Workreq::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'work_req_date' => $this->work_req_date,
            'apporve_by' => $this->apporve_by,
            'apporve_date' => $this->apporve_date,
            'work_type' => $this->work_type,
            'work_priority' => $this->work_priority,
            'work_title' => $this->work_title,
            'request_approve' => $this->request_approve,
            'problem_date' => $this->problem_date,
            'plant_id' => $this->plant_id,
            'department_id' => $this->department_id,
            'section_id' => $this->section_id,
            'location_id' => $this->location_id,
            'asset_id' => $this->asset_id,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        if($this->globalSearch != ''){
            $query->orFilterWhere(['like','name',$this->globalSearch])
                  ->orFilterWhere(['like','work_req_no',$this->globalSearch])
                  ->orFilterWhere(['like','description',$this->globalSearch]);
        }

        return $dataProvider;
    }
}
