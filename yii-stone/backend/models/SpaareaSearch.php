<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Spaarea;

/**
 * backend\models\SpaareaSearch represents the model behind the search form about `backend\models\Spaarea`.
 */
 class SpaareaSearch extends Spaarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_at','branch_id', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['hammam_clean_and_sanitize_all_basins', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', 'hammam_check_ventilation_ac_is_working', 'hammam_check_aroma_system_is_working', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', 'hammam_draw_up_the_decoration', 'hammam_clean_water_drean_and_put_flash_and_clorox', 'hammam_refill_aroma_in_the_burners', 'hammam_refill_spray_aroma_for_hammam', 'hammam_light_the_candles', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', 'hammam_check_temperature', 'massage_clean_carpets', 'massage_clean_and_sanitize_all_basins', 'massage_clean_surrounding_basin', 'massage_check_smell_liners_of_the_bed', 'massage_draw_up_the_decoration', 'massage_empty_trash', 'massage_check_temperature_24_degrees_celsius', 'massage_remove_stains_and_dust_on_surfaces', 'massage_the_towels_must_be_clean_flufy_and_perfumed', 'massage_light_the_candles', 'massage_refill_aroma_in_the_burners', 'facial_draw_up_products', 'facial_clean_the_product_containers', 'facial_clean_and_sanitize_sink', 'facial_check_temperature', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', 'facial_remove_stains_and_dust_on_surfaces', 'facial_the_towels_must_be_clean_flufy_and_perfumed', 'facial_empty_trash', 'facial_light_the_candles', 'facial_refill_aroma_in_the_burners', 'ayurveda_check_ventilation_ac_is_working', 'ayurveda_clean_and_sanitize_shower_and_sink', 'ayurveda_clean_mirrors', 'ayurveda_clean_all_surfaces_with_a_disinfectant', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', 'ayurveda_light_the_candles', 'ayurveda_refill_aroma_in_the_burners', 'ayurveda_check_temperature', 'makeup_sweep_and_mop_floors', 'makeup_remove_stains_and_dust_on_surfaces', 'makeup_empty_trush', 'makeup_clean_and_sanitize_sink', 'makeup_clean_mirrors', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Spaarea::find();
        if(! Yii::$app->user->identity->isAdmin) {
            $query->andWhere(['branch_id' => Yii::$app->user->identity->profile->branch_id]);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'branch_id'  => $this->branch_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'checked_by' => $this->checked_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
        ]);

        $query->andFilterWhere(['like', 'hammam_clean_and_sanitize_all_basins', $this->hammam_clean_and_sanitize_all_basins])
            ->andFilterWhere(['like', 'hammam_clean_a_tiled_surfaces_with_a_disinfectant', $this->hammam_clean_a_tiled_surfaces_with_a_disinfectant])
            ->andFilterWhere(['like', 'hammam_check_ventilation_ac_is_working', $this->hammam_check_ventilation_ac_is_working])
            ->andFilterWhere(['like', 'hammam_check_aroma_system_is_working', $this->hammam_check_aroma_system_is_working])
            ->andFilterWhere(['like', 'hammam_sanitize_all_surfaces_with_clorox_and_detol', $this->hammam_sanitize_all_surfaces_with_clorox_and_detol])
            ->andFilterWhere(['like', 'hammam_draw_up_the_decoration', $this->hammam_draw_up_the_decoration])
            ->andFilterWhere(['like', 'hammam_clean_water_drean_and_put_flash_and_clorox', $this->hammam_clean_water_drean_and_put_flash_and_clorox])
            ->andFilterWhere(['like', 'hammam_refill_aroma_in_the_burners', $this->hammam_refill_aroma_in_the_burners])
            ->andFilterWhere(['like', 'hammam_refill_spray_aroma_for_hammam', $this->hammam_refill_spray_aroma_for_hammam])
            ->andFilterWhere(['like', 'hammam_light_the_candles', $this->hammam_light_the_candles])
            ->andFilterWhere(['like', 'hammam_the_towels_must_be_clean_flufy_and_perfumed', $this->hammam_the_towels_must_be_clean_flufy_and_perfumed])
            ->andFilterWhere(['like', 'hammam_check_temperature', $this->hammam_check_temperature])
            ->andFilterWhere(['like', 'massage_clean_carpets', $this->massage_clean_carpets])
            ->andFilterWhere(['like', 'massage_clean_and_sanitize_all_basins', $this->massage_clean_and_sanitize_all_basins])
            ->andFilterWhere(['like', 'massage_clean_surrounding_basin', $this->massage_clean_surrounding_basin])
            ->andFilterWhere(['like', 'massage_check_smell_liners_of_the_bed', $this->massage_check_smell_liners_of_the_bed])
            ->andFilterWhere(['like', 'massage_draw_up_the_decoration', $this->massage_draw_up_the_decoration])
            ->andFilterWhere(['like', 'massage_empty_trash', $this->massage_empty_trash])
            ->andFilterWhere(['like', 'massage_check_temperature_24_degrees_celsius', $this->massage_check_temperature_24_degrees_celsius])
            ->andFilterWhere(['like', 'massage_remove_stains_and_dust_on_surfaces', $this->massage_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'massage_the_towels_must_be_clean_flufy_and_perfumed', $this->massage_the_towels_must_be_clean_flufy_and_perfumed])
            ->andFilterWhere(['like', 'massage_light_the_candles', $this->massage_light_the_candles])
            ->andFilterWhere(['like', 'massage_refill_aroma_in_the_burners', $this->massage_refill_aroma_in_the_burners])
            ->andFilterWhere(['like', 'facial_draw_up_products', $this->facial_draw_up_products])
            ->andFilterWhere(['like', 'facial_clean_the_product_containers', $this->facial_clean_the_product_containers])
            ->andFilterWhere(['like', 'facial_clean_and_sanitize_sink', $this->facial_clean_and_sanitize_sink])
            ->andFilterWhere(['like', 'facial_check_temperature', $this->facial_check_temperature])
            ->andFilterWhere(['like', 'facial_clean_and_sanitize_shower_and_sink_unit_shiny', $this->facial_clean_and_sanitize_shower_and_sink_unit_shiny])
            ->andFilterWhere(['like', 'facial_check_face_bowl_water_clean_and_appropriate_decoration_', $this->facial_check_face_bowl_water_clean_and_appropriate_decoration_])
            ->andFilterWhere(['like', 'facial_remove_stains_and_dust_on_surfaces', $this->facial_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'facial_the_towels_must_be_clean_flufy_and_perfumed', $this->facial_the_towels_must_be_clean_flufy_and_perfumed])
            ->andFilterWhere(['like', 'facial_empty_trash', $this->facial_empty_trash])
            ->andFilterWhere(['like', 'facial_light_the_candles', $this->facial_light_the_candles])
            ->andFilterWhere(['like', 'facial_refill_aroma_in_the_burners', $this->facial_refill_aroma_in_the_burners])
            ->andFilterWhere(['like', 'ayurveda_check_ventilation_ac_is_working', $this->ayurveda_check_ventilation_ac_is_working])
            ->andFilterWhere(['like', 'ayurveda_clean_and_sanitize_shower_and_sink', $this->ayurveda_clean_and_sanitize_shower_and_sink])
            ->andFilterWhere(['like', 'ayurveda_clean_mirrors', $this->ayurveda_clean_mirrors])
            ->andFilterWhere(['like', 'ayurveda_clean_all_surfaces_with_a_disinfectant', $this->ayurveda_clean_all_surfaces_with_a_disinfectant])
            ->andFilterWhere(['like', 'ayurveda_the_towels_must_be_clean_flufy_and_perfumed', $this->ayurveda_the_towels_must_be_clean_flufy_and_perfumed])
            ->andFilterWhere(['like', 'ayurveda_light_the_candles', $this->ayurveda_light_the_candles])
            ->andFilterWhere(['like', 'ayurveda_refill_aroma_in_the_burners', $this->ayurveda_refill_aroma_in_the_burners])
            ->andFilterWhere(['like', 'ayurveda_check_temperature', $this->ayurveda_check_temperature])
            ->andFilterWhere(['like', 'makeup_sweep_and_mop_floors', $this->makeup_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'makeup_remove_stains_and_dust_on_surfaces', $this->makeup_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'makeup_empty_trush', $this->makeup_empty_trush])
            ->andFilterWhere(['like', 'makeup_clean_and_sanitize_sink', $this->makeup_clean_and_sanitize_sink])
            ->andFilterWhere(['like', 'makeup_clean_mirrors', $this->makeup_clean_mirrors])
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
