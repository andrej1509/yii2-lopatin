<?php

use yii\db\Migration;

class m171011_133222_add_users_data extends Migration
{
    public function safeUp()
    {
        Yii::$app->db->createCommand()->batchInsert('user',  ['fio', 'username', 'password'], [
            ['admin', 'admin', 'admin'],
        ])->execute();

    }

    public function safeDown()
    {
        Yii::$app->db->createCommand()->delete('user',  ['fio', 'username', 'password'], [
            ['admin', 'admin', 'admin'],
        ])->execute();

    }
}
