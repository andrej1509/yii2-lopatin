<?php

use yii\db\Migration;

/**
 * Handles the creation of table `projects`.
 * Has foreign keys to the tables:
 *
 * - `users`
 */
class m171011_125707_create_projects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('projects', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string(),
            'price' => $this->double(),
            'start_date' => $this->dateTime(),
            'end_date' => $this->dateTime(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            'idx-projects-user_id',
            'projects',
            'user_id'
        );

        // add foreign key for table `users`
        $this->addForeignKey(
            'fk-projects-user_id',
            'projects',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `users`
        $this->dropForeignKey(
            'fk-projects-user_id',
            'projects'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-projects-user_id',
            'projects'
        );

        $this->dropTable('projects');
    }
}
