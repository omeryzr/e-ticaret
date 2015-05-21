<?php
/**
 * Created by PhpStorm.
 * User: Ömer
 * Date: 5.5.2015
 * Time: 16:04
 */


namespace app\models;

use Yii;

/**
 * This is the model class for table "derstipi".
 *
 * @property integer $derstipi_id
 * @property string $derstipi_adi
 * @property integer $ders_ders_id
 *
 * @property Ders $dersDers
 */
class Derstipi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'derstipi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['derstipi_adi', 'ders_ders_id'], 'required'],
            [['ders_ders_id'], 'integer'],
            [['derstipi_adi'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'derstipi_id' => 'Derstipi ID',
            'derstipi_adi' => 'Derstipi Adi',
            'ders_ders_id' => 'Ders Ders ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDersDers()
    {
        return $this->hasOne(Ders::className(), ['ders_id' => 'ders_ders_id']);
    }
}
