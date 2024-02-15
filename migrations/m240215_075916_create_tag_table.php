<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tag}}`.
 */
class m240215_075916_create_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tag}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique()->comment('Наименование тега для системы'),
            'label' => $this->string()->notNull()->comment('Наименование тега для отображения пользователям'),
            'color_id' => $this->integer()->comment('Цвет тега для отображения'),
        ]);

        $this->createIndex(
            'idx-tag-color_id',
            'tag',
            'color_id'
        );

        $this->addForeignKey(
            'fk-tag-color_id',
            'tag',
            'color_id',
            'color',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-tag-color_id',
            'tag'
        );

        $this->dropIndex(
            'idx-tag-color_id',
            'tag'
        );

        $this->dropTable('{{%tag}}');
    }
}
