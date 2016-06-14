<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\WeatherData;

/**
 * WeatherDataSearch represents the model behind the search form about `app\models\WeatherData`.
 */
class WeatherDataSearch extends WeatherData
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'site_code', 'wind_speed', 'wind_gust', 'visibility', 'pressure'], 'integer'],
            [['site_name', 'latitude', 'longitude', 'region', 'observation_time', 'observation_date', 'wind_direction', 'pressure_tendency', 'signifficant_weather'], 'safe'],
            [['screen_temperature'], 'number'],
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
        $query = WeatherData::find();

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
            'wind_speed' => $this->wind_speed,
            'wind_gust' => $this->wind_gust,
            'visibility' => $this->visibility,
            'screen_temperature' => $this->screen_temperature,
            'pressure' => $this->pressure,
        ]);

        $query->andFilterWhere(['like', 'site_name', $this->site_name])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'observation_time', $this->observation_time])
            ->andFilterWhere(['like', 'wind_direction', $this->wind_direction])
            ->andFilterWhere(['like', 'pressure_tendency', $this->pressure_tendency])
            ->andFilterWhere(['like', 'signifficant_weather', $this->signifficant_weather]);

        return $dataProvider;
    }
}
