<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog_has_image".
 *
 * @property int $id
 * @property int $blog_id
 * @property string $url
 * @property string $title
 * @property string $alt
 * @property bool $isBanner
 *
 * @property Blog $blog
 */
class BlogHasImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog_has_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'blog_id', 'url', 'title', 'alt'], 'required'],
            [['id', 'blog_id'], 'integer'],
            [['isBanner'], 'boolean'],
            [['url', 'title', 'alt'], 'string', 'max' => 255],
            [['id'], 'unique'],
            [['blog_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::class, 'targetAttribute' => ['blog_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'blog_id' => Yii::t('app', 'Blog ID'),
            'url' => Yii::t('app', 'Url'),
            'title' => Yii::t('app', 'Title'),
            'alt' => Yii::t('app', 'Alt'),
            'isBanner' => Yii::t('app', 'Is Banner'),
        ];
    }

    /**
     * Gets query for [[Blog]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlog()
    {
        return $this->hasOne(Blog::class, ['id' => 'blog_id']);
    }
}
