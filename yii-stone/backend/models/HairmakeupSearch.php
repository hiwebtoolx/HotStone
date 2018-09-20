<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HairMakeup;

/**
 * backend\models\HairmakeupSearch represents the model behind the search form about `backend\models\HairMakeup`.
 */
 class HairmakeupSearch extends HairMakeup
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by','branch_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['turn_on_lights', 'read_salon_logbook_hand_over', 'clean_sanitize', 'receive_supplies_and_products', 'check_all_equipment', 'turn_on_equipment', 'check_water_supply', 'check_drawers', 'make_sure_that_all_linens', 'organize_newspapers', 'clean_and_wipe_salon', 'clean_and_wipe_shampoo_bowls', 'clean_and_sanitize_make_up_brush', 'cart_and_trolleys_are_clean', 'sweep_mop_floors', 'combs_and_brushes_are_clean', 'make_sure_that_all_scissors_are_sharp', 'make_sure_there_are_no_busted_light_bulbs', 'hot_cabinet_is_full_with_towel', 'turn_on_lights2', 'check_supplies_and_products', 'mixing_bowls', 'aprons', 'water_sprayers', 'applicator_brushes', 'paper_towels', 'handheld_mirrors', 'rubber_gloves', 'plastic_gloves', 'shampoos', 'conditioners', 'hair_straightening_and_perming_kits', 'styling_gels', 'serums', 'mousse', 'hair_colors', 'hair_spray', 'hair_extensions', 'make_up_remover', 'cotton', 'tissu', 'ear_cotton', 'moisturizing_cream', 'face_scrub', 'eclat_ampoule', 'the_eyelashes', 'glow_for_eyelashes', 'tweezer', 'small_cisor', 'makeup_fixator', 'makeup_brush', 'foundation_Minimum_3_pigment', 'eye_shadow', 'blusher', 'mascara', 'eyeliner', 'eyebrow_color', 'customer_robe', 'hand_sanitazer', 'hand_wash', 'high_lighter', 'contouring', 'concealer', 'do_necessary_cleaning_and_station_reset', 'empty_trash_bins_and_replace_fresh_liners', 'ensure_quiet_interaction_with_the_customer', 'perform_service_according_to_standard', 'use_products_according_to_standard_recipes', 'remove_dirty_dishes_cups', 'sterilize_tools_and_materials', 'products_are_organized_in_their_respective_compartments', 'If_there_is_not_enough_supplies_and_products', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', 'stock_as_needed', 'write_on_logbook_to_hand_over_concerns', 'send_to_laundry_area_dirty_linens', 'conduct_day_end_inventory_of_selected_items', 'turn_off_all_lights', 'notes', 'shift_am', 'shift_pm', 'shift_date', 'lock', 'read_salon_logbook_hand_over2', 'clean_sanitize2', 'receive_supplies_and_products2', 'check_all_equipment2', 'turn_on_equipment2', 'check_water_supply2', 'check_drawers2', 'make_sure_that_all_linens2', 'organize_newspapers2', 'clean_and_wipe_salon2', 'clean_and_wipe_shampoo_bowls2', 'clean_and_sanitize_make_up_brush2', 'cart_and_trolleys_are_clean2', 'sweep_mop_floors2', 'combs_and_brushes_are_clean2', 'make_sure_that_all_scissors_are_sharp2', 'make_sure_there_are_no_busted_light_bulbs2', 'hot_cabinet_is_full_with_towel2'], 'safe'],
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
        $query = HairMakeup::find();
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
            'checked_by' => $this->checked_by,
            'shift_am' => $this->shift_am,
            'branch_id' => $this->branch_id,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'turn_on_lights', $this->turn_on_lights])
            ->andFilterWhere(['like', 'read_salon_logbook_hand_over', $this->read_salon_logbook_hand_over])
            ->andFilterWhere(['like', 'clean_sanitize', $this->clean_sanitize])
            ->andFilterWhere(['like', 'receive_supplies_and_products', $this->receive_supplies_and_products])
            ->andFilterWhere(['like', 'check_all_equipment', $this->check_all_equipment])
            ->andFilterWhere(['like', 'turn_on_equipment', $this->turn_on_equipment])
            ->andFilterWhere(['like', 'check_water_supply', $this->check_water_supply])
            ->andFilterWhere(['like', 'check_drawers', $this->check_drawers])
            ->andFilterWhere(['like', 'make_sure_that_all_linens', $this->make_sure_that_all_linens])
            ->andFilterWhere(['like', 'organize_newspapers', $this->organize_newspapers])
            ->andFilterWhere(['like', 'clean_and_wipe_salon', $this->clean_and_wipe_salon])
            ->andFilterWhere(['like', 'clean_and_wipe_shampoo_bowls', $this->clean_and_wipe_shampoo_bowls])
            ->andFilterWhere(['like', 'clean_and_sanitize_make_up_brush', $this->clean_and_sanitize_make_up_brush])
            ->andFilterWhere(['like', 'cart_and_trolleys_are_clean', $this->cart_and_trolleys_are_clean])
            ->andFilterWhere(['like', 'sweep_mop_floors', $this->sweep_mop_floors])
            ->andFilterWhere(['like', 'combs_and_brushes_are_clean', $this->combs_and_brushes_are_clean])
            ->andFilterWhere(['like', 'make_sure_that_all_scissors_are_sharp', $this->make_sure_that_all_scissors_are_sharp])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs', $this->make_sure_there_are_no_busted_light_bulbs])
            ->andFilterWhere(['like', 'hot_cabinet_is_full_with_towel', $this->hot_cabinet_is_full_with_towel])
            ->andFilterWhere(['like', 'turn_on_lights2', $this->turn_on_lights2])
            ->andFilterWhere(['like', 'check_supplies_and_products', $this->check_supplies_and_products])
            ->andFilterWhere(['like', 'mixing_bowls', $this->mixing_bowls])
            ->andFilterWhere(['like', 'aprons', $this->aprons])
            ->andFilterWhere(['like', 'water_sprayers', $this->water_sprayers])
            ->andFilterWhere(['like', 'applicator_brushes', $this->applicator_brushes])
            ->andFilterWhere(['like', 'paper_towels', $this->paper_towels])
            ->andFilterWhere(['like', 'handheld_mirrors', $this->handheld_mirrors])
            ->andFilterWhere(['like', 'rubber_gloves', $this->rubber_gloves])
            ->andFilterWhere(['like', 'plastic_gloves', $this->plastic_gloves])
            ->andFilterWhere(['like', 'shampoos', $this->shampoos])
            ->andFilterWhere(['like', 'conditioners', $this->conditioners])
            ->andFilterWhere(['like', 'hair_straightening_and_perming_kits', $this->hair_straightening_and_perming_kits])
            ->andFilterWhere(['like', 'styling_gels', $this->styling_gels])
            ->andFilterWhere(['like', 'serums', $this->serums])
            ->andFilterWhere(['like', 'mousse', $this->mousse])
            ->andFilterWhere(['like', 'hair_colors', $this->hair_colors])
            ->andFilterWhere(['like', 'hair_spray', $this->hair_spray])
            ->andFilterWhere(['like', 'hair_extensions', $this->hair_extensions])
            ->andFilterWhere(['like', 'make_up_remover', $this->make_up_remover])
            ->andFilterWhere(['like', 'cotton', $this->cotton])
            ->andFilterWhere(['like', 'tissu', $this->tissu])
            ->andFilterWhere(['like', 'ear_cotton', $this->ear_cotton])
            ->andFilterWhere(['like', 'moisturizing_cream', $this->moisturizing_cream])
            ->andFilterWhere(['like', 'face_scrub', $this->face_scrub])
            ->andFilterWhere(['like', 'eclat_ampoule', $this->eclat_ampoule])
            ->andFilterWhere(['like', 'the_eyelashes', $this->the_eyelashes])
            ->andFilterWhere(['like', 'glow_for_eyelashes', $this->glow_for_eyelashes])
            ->andFilterWhere(['like', 'tweezer', $this->tweezer])
            ->andFilterWhere(['like', 'small_cisor', $this->small_cisor])
            ->andFilterWhere(['like', 'makeup_fixator', $this->makeup_fixator])
            ->andFilterWhere(['like', 'makeup_brush', $this->makeup_brush])
            ->andFilterWhere(['like', 'foundation_Minimum_3_pigment', $this->foundation_Minimum_3_pigment])
            ->andFilterWhere(['like', 'eye_shadow', $this->eye_shadow])
            ->andFilterWhere(['like', 'blusher', $this->blusher])
            ->andFilterWhere(['like', 'mascara', $this->mascara])
            ->andFilterWhere(['like', 'eyeliner', $this->eyeliner])
            ->andFilterWhere(['like', 'eyebrow_color', $this->eyebrow_color])
            ->andFilterWhere(['like', 'customer_robe', $this->customer_robe])
            ->andFilterWhere(['like', 'hand_sanitazer', $this->hand_sanitazer])
            ->andFilterWhere(['like', 'hand_wash', $this->hand_wash])
            ->andFilterWhere(['like', 'high_lighter', $this->high_lighter])
            ->andFilterWhere(['like', 'contouring', $this->contouring])
            ->andFilterWhere(['like', 'concealer', $this->concealer])
            ->andFilterWhere(['like', 'do_necessary_cleaning_and_station_reset', $this->do_necessary_cleaning_and_station_reset])
            ->andFilterWhere(['like', 'empty_trash_bins_and_replace_fresh_liners', $this->empty_trash_bins_and_replace_fresh_liners])
            ->andFilterWhere(['like', 'ensure_quiet_interaction_with_the_customer', $this->ensure_quiet_interaction_with_the_customer])
            ->andFilterWhere(['like', 'perform_service_according_to_standard', $this->perform_service_according_to_standard])
            ->andFilterWhere(['like', 'use_products_according_to_standard_recipes', $this->use_products_according_to_standard_recipes])
            ->andFilterWhere(['like', 'remove_dirty_dishes_cups', $this->remove_dirty_dishes_cups])
            ->andFilterWhere(['like', 'sterilize_tools_and_materials', $this->sterilize_tools_and_materials])
            ->andFilterWhere(['like', 'products_are_organized_in_their_respective_compartments', $this->products_are_organized_in_their_respective_compartments])
            ->andFilterWhere(['like', 'If_there_is_not_enough_supplies_and_products', $this->If_there_is_not_enough_supplies_and_products])
            ->andFilterWhere(['like', 'make_sure_that_all_tools_and_materials_to_be_used_in__are_availa', $this->make_sure_that_all_tools_and_materials_to_be_used_in__are_availa])
            ->andFilterWhere(['like', 'stock_as_needed', $this->stock_as_needed])
            ->andFilterWhere(['like', 'write_on_logbook_to_hand_over_concerns', $this->write_on_logbook_to_hand_over_concerns])
            ->andFilterWhere(['like', 'send_to_laundry_area_dirty_linens', $this->send_to_laundry_area_dirty_linens])
            ->andFilterWhere(['like', 'conduct_day_end_inventory_of_selected_items', $this->conduct_day_end_inventory_of_selected_items])
            ->andFilterWhere(['like', 'turn_off_all_lights', $this->turn_off_all_lights])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'read_salon_logbook_hand_over2', $this->read_salon_logbook_hand_over2])
            ->andFilterWhere(['like', 'clean_sanitize2', $this->clean_sanitize2])
            ->andFilterWhere(['like', 'receive_supplies_and_products2', $this->receive_supplies_and_products2])
            ->andFilterWhere(['like', 'check_all_equipment2', $this->check_all_equipment2])
            ->andFilterWhere(['like', 'turn_on_equipment2', $this->turn_on_equipment2])
            ->andFilterWhere(['like', 'check_water_supply2', $this->check_water_supply2])
            ->andFilterWhere(['like', 'check_drawers2', $this->check_drawers2])
            ->andFilterWhere(['like', 'make_sure_that_all_linens2', $this->make_sure_that_all_linens2])
            ->andFilterWhere(['like', 'organize_newspapers2', $this->organize_newspapers2])
            ->andFilterWhere(['like', 'clean_and_wipe_salon2', $this->clean_and_wipe_salon2])
            ->andFilterWhere(['like', 'clean_and_wipe_shampoo_bowls2', $this->clean_and_wipe_shampoo_bowls2])
            ->andFilterWhere(['like', 'clean_and_sanitize_make_up_brush2', $this->clean_and_sanitize_make_up_brush2])
            ->andFilterWhere(['like', 'cart_and_trolleys_are_clean2', $this->cart_and_trolleys_are_clean2])
            ->andFilterWhere(['like', 'sweep_mop_floors2', $this->sweep_mop_floors2])
            ->andFilterWhere(['like', 'combs_and_brushes_are_clean2', $this->combs_and_brushes_are_clean2])
            ->andFilterWhere(['like', 'make_sure_that_all_scissors_are_sharp2', $this->make_sure_that_all_scissors_are_sharp2])
            ->andFilterWhere(['like', 'make_sure_there_are_no_busted_light_bulbs2', $this->make_sure_there_are_no_busted_light_bulbs2])
            ->andFilterWhere(['like', 'hot_cabinet_is_full_with_towel2', $this->hot_cabinet_is_full_with_towel2]);

        return $dataProvider;
    }
}
