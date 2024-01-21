<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blog".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property resource $body
 * @property string $bodyTxt
 * @property string $bodyPreview
 * @property string $created_at
 * @property string $updated_at
 * @property int $user_id
 *
 * @property BlogHasImage[] $blogHasImages
 * @property Blog[] $blogs
 * @property Blog $user
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'body', 'created_at', 'updated_at', 'user_id'], 'required'],
            [['body'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['user_id'], 'integer'],
            [['title', 'slug'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Blog::class, 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'slug' => Yii::t('app', 'Slug'),
            'body' => Yii::t('app', 'Body'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'user_id' => Yii::t('app', 'User ID'),
        ];
    }

    /**
     * Gets query for [[BlogHasImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogHasImages()
    {
        return $this->hasMany(BlogHasImage::class, ['blog_id' => 'id']);
    }

    /**
     * Gets query for [[Blogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBlogs()
    {
        return $this->hasMany(Blog::class, ['user_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Blog::class, ['id' => 'user_id']);
    }

    /**
     * Gets query for [[BlogHasImages]] where Image is BANNER.
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBannerImage()
    {
        return BlogHasImage::find()->where(['blog_id' => $this->id])->andWhere(['isBanner' => true])->one();
    }

    /**
     * Gets body attribute casted as string
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBodyTxt()
    {
        return yii\helpers\StringHelper::base64UrlDecode($this->body);
    }

    /**
     * Gets short part of body attribute
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBodyPreview()
    {
        return substr($this->bodyTxt, 0, (strlen($this->bodyTxt) > 30 ? 30 : strlen($this->bodyTxt) - 1)) . '...';
    }

    public static function getLastest()
    {
        return Blog::find()->orderBy('created_at', SORT_DESC)->limit(10)->all();
    }
}
