<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%color}}`.
 */
class m240215_075849_create_color_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%color}}', [
            'id' => $this->primaryKey(),
            'hex' => $this->string(6)->notNull()->unique()->comment('Шестнадцатеричный код цвета'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%color}}');
    }
}
