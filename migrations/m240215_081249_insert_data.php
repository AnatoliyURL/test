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

        $this->batchInsert('product',['name', 'label'], [
            ['oranges', 'Апельсины'],
            ['bananas', 'Бананы'],
            ['potato', 'Картошка'],
            ['kefir', 'Кефир'],
            ['coffee', 'Кофе'],
            ['onion', 'Лук'],
            ['oil', 'Масло'],
            ['milk', 'Молоко'],
            ['flour', 'Мука'],
            ['cucumbers', 'Огурцы'],
            ['peppers', 'Перцы'],
            ['tomatoes', 'Помидоры'],
            ['rice', 'Рис'],
            ['sugar', 'Сахар'],
            ['cheese', 'Сыр'],
            ['cottage cheese', 'Творог'],
            ['tea', 'Чай'],
            ['apples', 'Яблоки'],
        ]);

        $this->batchInsert('tag',['name', 'label', 'color_id', 'priority'], [
            ['discount', 'Скидка', 1, 7],
            ['cashback_10', 'Кэшбэк 10%', 1, 6],
            ['milk', 'Молоко', 2, 5],
            ['grocery', 'Бакалея', 2, 4],
            ['vegetables_fruits', 'Овощи фрукты', 2, 3],
            ['eco', 'Эко', 3, 2],
            ['children', 'Для детей', 3, 1],
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
