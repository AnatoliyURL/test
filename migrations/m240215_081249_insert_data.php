<?php

use yii\db\Migration;

/**
 * Class m240215_081249_insert_data
 */
class m240215_081249_insert_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('color',['hex'], [
            ['f18a45'],
            ['5ea5ff'],
            ['72c472'],
        ]);

        $this->batchInsert('product',['name', 'label', 'priority'], [
            ['oranges', 'Апельсины', 1],
            ['bananas', 'Бананы', 1],
            ['potato', 'Картошка', 1],
            ['kefir', 'Кефир', 1],
            ['coffee', 'Кофе', 1],
            ['onion', 'Лук', 1],
            ['oil', 'Масло', 1],
            ['milk', 'Молоко', 1],
            ['flour', 'Мука', 1],
            ['cucumbers', 'Огурцы', 1],
            ['peppers', 'Перцы', 1],
            ['tomatoes', 'Помидоры', 1],
            ['rice', 'Рис', 1],
            ['sugar', 'Сахар', 1],
            ['cheese', 'Сыр', 1],
            ['cottage cheese', 'Творог', 1],
            ['tea', 'Чай', 1],
            ['apples', 'Яблоки', 1],
        ]);

        $this->batchInsert('tag',['name', 'label', 'color_id'], [
            ['discount', 'Скидка', 1],
            ['cashback_10', 'Кэшбэк 10%', 1],
            ['milk', 'Молоко', 2],
            ['grocery', 'Бакалея', 2],
            ['vegetables_fruits', 'Овощи фрукты', 2],
            ['eco', 'Эко', 3],
            ['children', 'Для детей', 3],
        ]);

        $this->batchInsert('product_tags',['product_id', 'tag_id'], [
            [1, 1],
            [1, 5],

            [2, 5],

            [3, 2],
            [3, 5],
            [3, 6],

            [4, 3],

            [5, 1],
            [5, 2],
            [5, 4],
            [5, 6],

            [6, 5],

            [7, 1],
            [7, 3],

            [8, 3],
            [8, 7],

            [9, 4],

            [10, 1],
            [10, 2],
            [10, 5],
            [10, 6],

            [11, 5],

            [12, 2],
            [12, 5],
            [12, 6],

            [13, 4],

            [14, 1],
            [14, 4],

            [15, 2],
            [15, 3],
            [15, 6],

            [16, 3],

            [17, 4],

            [18, 5],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('product_tags');
        $this->delete('tag');
        $this->delete('product');
        $this->delete('color');
    }
}
