<?php

/** @var yii\web\View $this */
/** @var array $products */
/** @var Product $product */
/** @var Pagination $pagination */

use app\models\Product;
use app\models\Tag;
use yii\bootstrap5\LinkPager;
use yii\data\Pagination;

$this->title = 'Стартовая';
?>
<div class="site-index">
    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <?php
        if ($products): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Наименование продукта</th>
                    <th scope="col">Теги</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product->label ?></td>
                        <td class="d-flex ">
                            <?php foreach ($product->tags as $tag): ?>
                                <?php if ($tag): ?>
                                    <div class="p-2 m-1 rounded-pill" style="background-color: #<?= $tag['tag']['color']['hex'] ?? Tag::DEFAULT_COLOR ?>">
                                        <?= $tag['tag']['label'] ?>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach ?>
                        </td>
                    </tr>
                <?php
                endforeach; ?>
                </tbody>
            </table>

            <?= LinkPager::widget(['pagination' => $pagination]) ?>

        <?php
        endif; ?>
    </div>
</div>
