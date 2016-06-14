<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\WeatherDataGrouped */

$this->title = 'Create Weather Data Grouped';
$this->params['breadcrumbs'][] = ['label' => 'Weather Data Groupeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="weather-data-grouped-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
