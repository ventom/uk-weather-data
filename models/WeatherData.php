<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weather_data".
 *
 * @property integer $id
 * @property integer $site_code
 * @property string $site_name
 * @property string $latitude
 * @property string $longitude
 * @property string $region
 * @property string $observation_time
 * @property string $observation_date
 * @property string $wind_direction
 * @property integer $wind_speed
 * @property integer $wind_gust
 * @property integer $visibility
 * @property double $screen_temperature
 * @property integer $pressure
 * @property string $pressure_tendency
 * @property string $signifficant_weather
 */
class WeatherData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weather_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_code', 'wind_speed', 'wind_gust', 'visibility', 'pressure'], 'integer'],
            [['site_name', 'latitude', 'longitude', 'observation_time', 'wind_direction', 'pressure_tendency', 'signifficant_weather'], 'required'],
            [['observation_date'], 'safe'],
            [['screen_temperature'], 'number'],
            [['site_name', 'latitude', 'longitude', 'region', 'signifficant_weather'], 'string', 'max' => 100],
            [['observation_time'], 'string', 'max' => 6],
            [['wind_direction', 'pressure_tendency'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_code' => 'Site Code',
            'site_name' => 'Site Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'region' => 'Region',
            'observation_time' => 'Observation Time',
            'observation_date' => 'Observation Date',
            'wind_direction' => 'Wind Direction',
            'wind_speed' => 'Wind Speed',
            'wind_gust' => 'Wind Gust',
            'visibility' => 'Visibility',
            'screen_temperature' => 'Screen Temperature',
            'pressure' => 'Pressure',
            'pressure_tendency' => 'Pressure Tendency',
            'signifficant_weather' => 'Signifficant Weather',
        ];
    }
}
