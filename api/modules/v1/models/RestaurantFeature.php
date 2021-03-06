<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
/**
 * RestaurantFeature Model
 *
 * @author Jayanta Kundu created on 04.06.2015
 */
class RestaurantFeature extends ActiveRecord 
{
    /**
    * @inheritdoc
    */
    public static function tableName()
    {
	return 'ed_restaurant_features';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [['id', 'res_id', 'features_id'], 'required']
        ];
    }   
}
