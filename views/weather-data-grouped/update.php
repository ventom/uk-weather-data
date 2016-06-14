<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\WeatherDataGrouped */

$this->title = 'Update Weather Data Grouped: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Weather Data Groupeds', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weather-data-grouped-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
