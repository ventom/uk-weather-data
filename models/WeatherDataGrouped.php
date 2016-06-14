<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "weather_data_grouped".
 *
 * @property integer $site_code
 * @property string $site_name
 * @property string $latitude
 * @property string $longitude
 * @property string $region
 * @property string $observation_date
 * @property string $wind_speed_avg
 * @property integer $wind_speed_min
 * @property integer $wind_speed_max
 * @property string $visibility_avg
 * @property integer $visibility_min
 * @property integer $visibility_max
 * @property double $screen_temperature_avg
 * @property double $screen_temperature_min
 * @property double $screen_temperature_max
 * @property string $pressure_avg
 * @property integer $pressure_min
 * @property integer $pressure_max
 */
class WeatherDataGrouped extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'weather_data_grouped';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_code', 'wind_speed_min', 'wind_speed_max', 'visibility_min', 'visibility_max', 'pressure_min', 'pressure_max'], 'integer'],
            [['site_name', 'latitude', 'longitude'], 'required'],
            [['observation_date'], 'safe'],
            [['wind_speed_avg', 'visibility_avg', 'screen_temperature_avg', 'screen_temperature_min', 'screen_temperature_max', 'pressure_avg'], 'number'],
            [['site_name', 'latitude', 'longitude', 'region'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'site_code' => 'Site Code',
            'site_name' => 'Site Name',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'region' => 'Region',
            'observation_date' => 'Observation Date',
            'wind_speed_avg' => 'Wind Speed Avg',
            'wind_speed_min' => 'Wind Speed Min',
            'wind_speed_max' => 'Wind Speed Max',
            'visibility_avg' => 'Visibility Avg',
            'visibility_min' => 'Visibility Min',
            'visibility_max' => 'Visibility Max',
            'screen_temperature_avg' => 'Screen Temperature Avg',
            'screen_temperature_min' => 'Screen Temperature Min',
            'screen_temperature_max' => 'Screen Temperature Max',
            'pressure_avg' => 'Pressure Avg',
            'pressure_min' => 'Pressure Min',
            'pressure_max' => 'Pressure Max',
        ];
    }
}
