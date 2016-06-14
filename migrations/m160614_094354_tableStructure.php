<?php

use yii\db\Schema;
use yii\db\Migration;

class m160614_094354_tableStructure extends Migration
{
    public function up()
    {
		$tableOptions = null;
		if ($this->db->driverName === 'mysql') {
			$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		}
    
		 //Create table registration
			$this->createTable('weather_data', [
				'id' => Schema::TYPE_PK,
				'site_code' => Schema::TYPE_INTEGER ,
				'site_name' => Schema::TYPE_STRING . '(100) NOT NULL',
				'latitude' => Schema::TYPE_STRING . '(100) NOT NULL',
				'longitude' => Schema::TYPE_STRING . '(100) NOT NULL',
				'region' => Schema::TYPE_STRING . '(100)',
				'observation_time' => Schema::TYPE_STRING . '(6) NOT NULL',
				'observation_date' => Schema::TYPE_DATE,
				'wind_direction' => Schema::TYPE_STRING . '(4) NOT NULL',
				'wind_speed' => Schema::TYPE_INTEGER ,
				'wind_gust' => Schema::TYPE_INTEGER ,
				'visibility' => Schema::TYPE_INTEGER ,
				'screen_temperature' => Schema::TYPE_FLOAT ,
				'pressure' => Schema::TYPE_INTEGER ,
				'pressure_tendency' => Schema::TYPE_STRING . '(4) NOT NULL',
				'signifficant_weather' => Schema::TYPE_STRING . '(100) NOT NULL'
			], $tableOptions);
    }

    public function down()
    {
        echo "m160614_094354_tableStructure cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
