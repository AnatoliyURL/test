<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property int $id
 * @property string $name Наименование тега для системы
 * @property string $label Наименование тега для отображения пользователям
 * @property int|null $priority Приоритет тега
 * @property int|null $color_id Цвет тега для отображения
 *
 * @property Color $color
 * @property ProductTags[] $productTags
 */
class Tag extends \yii\db\ActiveRecord
{
    const DEFAULT_COLOR = 'e1e3e1';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'label'], 'required'],
            [['priority', 'color_id'], 'integer'],
            [['name', 'label'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Color::class, 'targetAttribute' => ['color_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'label' => 'Label',
            'priority' => 'Priority',
            'color_id' => 'Color ID',
        ];
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Color::class, ['id' => 'color_id']);
    }

    /**
     * Gets query for [[ProductTags]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductTags()
    {
        return $this->hasMany(ProductTags::class, ['tag_id' => 'id']);
    }
}
