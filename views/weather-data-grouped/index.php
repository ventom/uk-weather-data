<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\WeatherDataGroupedSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Weather Data Grouped';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-data-grouped-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
<!--        <?= Html::a('Create Weather Data Grouped', ['create'], ['class' => 'btn btn-success']) ?>-->
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

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
