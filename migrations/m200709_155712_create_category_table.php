<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m200709_155712_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'parent_id' => $this->integer()->defaultValue(null),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->dropTable('{{%category}}');
    }
}
