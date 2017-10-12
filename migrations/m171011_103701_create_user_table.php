<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171011_103701_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'username' => $this->string(),
            'password' => $this->string()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
