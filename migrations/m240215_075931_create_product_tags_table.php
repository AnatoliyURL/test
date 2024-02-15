<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_tags}}`.
 */
class m240215_075931_create_product_tags_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_tags}}', [
            'product_id' => $this->integer()->notNull(),
            'tag_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-product_tags-product_id',
            'product_tags',
            'product_id'
        );

        $this->addForeignKey(
            'fk-product_tags-product_id',
            'product_tags',
            'product_id',
            'product',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-product_tags-tag_id',
            'product_tags',
            'tag_id'
        );

        $this->addForeignKey(
            'fk-product_tags-tag_id',
            'product_tags',
            'tag_id',
            'tag',
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
            'fk-product_tags-tag_id',
            'product_tags'
        );

        $this->dropIndex(
            'idx-product_tags-tag_id',
            'product_tags'
        );

        $this->dropForeignKey(
            'fk-product_tags-product_id',
            'product_tags'
        );

        $this->dropIndex(
            'idx-product_tags-product_id',
            'product_tags'
        );
        $this->dropTable('{{%product_tags}}');
    }
}
