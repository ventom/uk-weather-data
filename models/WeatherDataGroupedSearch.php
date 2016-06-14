<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WeatherDataGrouped;

/**
 * WeatherDataGroupedSearch represents the model behind the search form about `app\models\WeatherDataGrouped`.
 */
class WeatherDataGroupedSearch extends WeatherDataGrouped
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'site_code', 'wind_speed_min', 'wind_speed_max', 'visibility_min', 'visibility_max', 'pressure_min', 'pressure_max'], 'integer'],
            [['site_name', 'latitude', 'longitude', 'region', 'observation_date'], 'safe'],
            [['wind_speed_avg', 'visibility_avg', 'screen_temperature_avg', 'screen_temperature_min', 'screen_temperature_max', 'pressure_avg'], 'number'],
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
        $query = WeatherDataGrouped::find();

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
            'site_code' => $this->site_code,
            'observation_date' => $this->observation_date,
            'wind_speed_avg' => $this->wind_speed_avg,
            'wind_speed_min' => $this->wind_speed_min,
            'wind_speed_max' => $this->wind_speed_max,
            'visibility_avg' => $this->visibility_avg,
            'visibility_min' => $this->visibility_min,
            'visibility_max' => $this->visibility_max,
            'screen_temperature_avg' => $this->screen_temperature_avg,
            'screen_temperature_min' => $this->screen_temperature_min,
            'screen_temperature_max' => $this->screen_temperature_max,
            'pressure_avg' => $this->pressure_avg,
            'pressure_min' => $this->pressure_min,
            'pressure_max' => $this->pressure_max,
        ]);

        $query->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'region', $this->region]);

        return $dataProvider;
    }
}
