<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\WeatherDataSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weather Data Raw';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-data-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<!--        <?= Html::a('Create Weather Data', ['create'], ['class' => 'btn btn-success']) ?>-->
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//             'id',
//             'site_code',
            'site_name',
//             'latitude',
//             'longitude',
            // 'region',
            'observation_time',
            'observation_date',
            'wind_direction',
            'wind_speed',
            // 'wind_gust',
            'visibility',
            'screen_temperature',
            'pressure',
            // 'pressure_tendency',
            'signifficant_weather',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
