<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m200709_154849_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%post}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'body' => $this->text()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%post}}');
    }
}
