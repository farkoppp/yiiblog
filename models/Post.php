<?php

namespace app\models;
use yii\db\ActiveRecord;

/**
 * Description of Post
 *
 * @author dmitryshiryaev
 */
class Post extends ActiveRecord{
    public static function tableName() {
        return 'post';
    }
    //put your code here
}
