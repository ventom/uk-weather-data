<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherDataGrouped */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Weather Data Groupeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-data-grouped-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'site_code',
            'site_name',
            'latitude',
            'longitude',
            'region',
            'observation_date',
            'wind_speed_avg',
            'wind_speed_min',
            'wind_speed_max',
            'visibility_avg',
            'visibility_min',
            'visibility_max',
            'screen_temperature_avg',
            'screen_temperature_min',
            'screen_temperature_max',
            'pressure_avg',
            'pressure_min',
            'pressure_max',
        ],
    ]) ?>

</div>
