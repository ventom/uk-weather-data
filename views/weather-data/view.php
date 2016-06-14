<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherData */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Weather Datas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-data-view">

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
            'observation_time',
            'observation_date',
            'wind_direction',
            'wind_speed',
            'wind_gust',
            'visibility',
            'screen_temperature',
            'pressure',
            'pressure_tendency',
            'signifficant_weather',
        ],
    ]) ?>

</div>
