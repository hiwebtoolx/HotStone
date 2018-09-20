<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CommonArea;

/**
 * backend\models\CommonareaSearch represents the model behind the search form about `backend\models\CommonArea`.
 */
 class CommonareaSearch extends Commonarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'checked_by','branch_id', 'created_at', 'updated_at', 'created_by', 'updated_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['shift_am', 'shift_pm', 'shift_date', 'lock', 'hair_sweep_and_mop_floors', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', 'hair_remove_stains_and_dust_on_surfaces', 'hair_clean_mirrors', 'hair_clean_cart_and_trolleys', 'hair_clean_drawers_and_cabinets', 'hair_empty_trash', 'hair_detect_and_change_busted_light', 'shampoo_sweep_and_mop_floors', 'shampoo_clean_under_chairs_from_hair_and_put_leader', 'shampoo_clean_sinks_from_hair_and_product_residue', 'shampoo_clean_shampoo_bowls', 'shampoo_empty_trash', 'shampoo_remove_stains_and_dust_on_surfaces', 'shampoo_clean_mirrors', 'shampoo_clean_the_product_containers', 'shampoo_empty_towel_basket', 'shampoo_detect_and_change_busted_light', 'treatment_sweep_and_mop_floors', 'treatment_clean_under_chairs_from_hair_and_put_leader', 'treatment_clean_sinks_from_hair_and_product_residue', 'treatment_empty_trash', 'treatment_remove_stains_and_dust_on_surfaces', 'treatment_draw_up_the_decoration', 'treatment_clean_mixed_bowls', 'treatment_clean_mirrors', 'treatment_clean_the_product_containers', 'treatment_empty_used_towel_bascket', 'treatment_clean_the_product_containers2', 'treatment_detect_and_change_busted_light', 'pedicure_the_curtains_should_be_clean', 'pedicure_sweep_and_mop_floors', 'pedicure_clean_under_chairs__and_put_leader', 'pedicure_clean_and_sanitize_sink', 'pedicure_empty_trash', 'pedicure_remove_stains_and_dust_on_surfaces', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', 'pedicure_remove_empty_glasses', 'manicure_bar_draw_up_products', 'manicure_bar_empty_trash', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', 'manicure_bar_clean_and_organize_nail_polish_racks', 'manicure_bar_empty_used_towel_bascket', 'hair_sweep_and_mop_floors2', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2', 'hair_remove_stains_and_dust_on_surfaces2', 'hair_clean_mirrors2', 'hair_clean_cart_and_trolleys2', 'hair_clean_drawers_and_cabinets2', 'hair_empty_trash2', 'hair_detect_and_change_busted_light2', 'shampoo_sweep_and_mop_floors2', 'shampoo_clean_under_chairs_from_hair_and_put_leader2', 'shampoo_clean_sinks_from_hair_and_product_residue2', 'shampoo_clean_shampoo_bowls2', 'shampoo_empty_trash2', 'shampoo_remove_stains_and_dust_on_surfaces2', 'shampoo_clean_mirrors2', 'shampoo_clean_the_product_containers2', 'shampoo_empty_towel_basket2', 'shampoo_detect_and_change_busted_light2', 'treatment_sweep_and_mop_floors2', 'treatment_clean_under_chairs_from_hair_and_put_leader2', 'treatment_clean_sinks_from_hair_and_product_residue2', 'treatment_empty_trash2', 'treatment_remove_stains_and_dust_on_surfaces2', 'treatment_draw_up_the_decoration2', 'treatment_clean_mixed_bowls2', 'treatment_clean_mirrors2', 'treatment_clean_the_product_container2', 'treatment_empty_used_towel_bascket2', 'treatment_clean_the_product_containers22', 'treatment_detect_and_change_busted_light2', 'pedicure_the_curtains_should_be_clean2', 'pedicure_sweep_and_mop_floors2', 'pedicure_clean_under_chairs__and_put_leader2', 'pedicure_clean_and_sanitize_sink2', 'pedicure_empty_trash2', 'pedicure_remove_stains_and_dust_on_surfaces2', 'pedicure_remove_basket_cleaning_items_and_dirty_towels2', 'pedicure_remove_empty_glasses2', 'manicure_bar_draw_up_products2', 'manicure_bar_empty_trash2', 'manicure_bar_clean_all_surfaces_with_a_disinfectant2', 'manicure_bar_clean_and_organize_nail_polish_racks2', 'manicure_bar_empty_used_towel_bascket2'], 'safe'],
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
        $query = CommonArea::find();
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
            'branch_id'  => $this->branch_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'hair_sweep_and_mop_floors', $this->hair_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', $this->clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha])
            ->andFilterWhere(['like', 'hair_remove_stains_and_dust_on_surfaces', $this->hair_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'hair_clean_mirrors', $this->hair_clean_mirrors])
            ->andFilterWhere(['like', 'hair_clean_cart_and_trolleys', $this->hair_clean_cart_and_trolleys])
            ->andFilterWhere(['like', 'hair_clean_drawers_and_cabinets', $this->hair_clean_drawers_and_cabinets])
            ->andFilterWhere(['like', 'hair_empty_trash', $this->hair_empty_trash])
            ->andFilterWhere(['like', 'hair_detect_and_change_busted_light', $this->hair_detect_and_change_busted_light])
            ->andFilterWhere(['like', 'shampoo_sweep_and_mop_floors', $this->shampoo_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'shampoo_clean_under_chairs_from_hair_and_put_leader', $this->shampoo_clean_under_chairs_from_hair_and_put_leader])
            ->andFilterWhere(['like', 'shampoo_clean_sinks_from_hair_and_product_residue', $this->shampoo_clean_sinks_from_hair_and_product_residue])
            ->andFilterWhere(['like', 'shampoo_clean_shampoo_bowls', $this->shampoo_clean_shampoo_bowls])
            ->andFilterWhere(['like', 'shampoo_empty_trash', $this->shampoo_empty_trash])
            ->andFilterWhere(['like', 'shampoo_remove_stains_and_dust_on_surfaces', $this->shampoo_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'shampoo_clean_mirrors', $this->shampoo_clean_mirrors])
            ->andFilterWhere(['like', 'shampoo_clean_the_product_containers', $this->shampoo_clean_the_product_containers])
            ->andFilterWhere(['like', 'shampoo_empty_towel_basket', $this->shampoo_empty_towel_basket])
            ->andFilterWhere(['like', 'shampoo_detect_and_change_busted_light', $this->shampoo_detect_and_change_busted_light])
            ->andFilterWhere(['like', 'treatment_sweep_and_mop_floors', $this->treatment_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'treatment_clean_under_chairs_from_hair_and_put_leader', $this->treatment_clean_under_chairs_from_hair_and_put_leader])
            ->andFilterWhere(['like', 'treatment_clean_sinks_from_hair_and_product_residue', $this->treatment_clean_sinks_from_hair_and_product_residue])
            ->andFilterWhere(['like', 'treatment_empty_trash', $this->treatment_empty_trash])
            ->andFilterWhere(['like', 'treatment_remove_stains_and_dust_on_surfaces', $this->treatment_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'treatment_draw_up_the_decoration', $this->treatment_draw_up_the_decoration])
            ->andFilterWhere(['like', 'treatment_clean_mixed_bowls', $this->treatment_clean_mixed_bowls])
            ->andFilterWhere(['like', 'treatment_clean_mirrors', $this->treatment_clean_mirrors])
            ->andFilterWhere(['like', 'treatment_clean_the_product_containers', $this->treatment_clean_the_product_containers])
            ->andFilterWhere(['like', 'treatment_empty_used_towel_bascket', $this->treatment_empty_used_towel_bascket])
            ->andFilterWhere(['like', 'treatment_clean_the_product_containers2', $this->treatment_clean_the_product_containers2])
            ->andFilterWhere(['like', 'treatment_detect_and_change_busted_light', $this->treatment_detect_and_change_busted_light])
            ->andFilterWhere(['like', 'pedicure_the_curtains_should_be_clean', $this->pedicure_the_curtains_should_be_clean])
            ->andFilterWhere(['like', 'pedicure_sweep_and_mop_floors', $this->pedicure_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'pedicure_clean_under_chairs__and_put_leader', $this->pedicure_clean_under_chairs__and_put_leader])
            ->andFilterWhere(['like', 'pedicure_clean_and_sanitize_sink', $this->pedicure_clean_and_sanitize_sink])
            ->andFilterWhere(['like', 'pedicure_empty_trash', $this->pedicure_empty_trash])
            ->andFilterWhere(['like', 'pedicure_remove_stains_and_dust_on_surfaces', $this->pedicure_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', $this->pedicure_remove_basket_cleaning_items_and_dirty_towels])
            ->andFilterWhere(['like', 'pedicure_remove_empty_glasses', $this->pedicure_remove_empty_glasses])
            ->andFilterWhere(['like', 'manicure_bar_draw_up_products', $this->manicure_bar_draw_up_products])
            ->andFilterWhere(['like', 'manicure_bar_empty_trash', $this->manicure_bar_empty_trash])
            ->andFilterWhere(['like', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', $this->manicure_bar_clean_all_surfaces_with_a_disinfectant])
            ->andFilterWhere(['like', 'manicure_bar_clean_and_organize_nail_polish_racks', $this->manicure_bar_clean_and_organize_nail_polish_racks])
            ->andFilterWhere(['like', 'manicure_bar_empty_used_towel_bascket', $this->manicure_bar_empty_used_towel_bascket])
            ->andFilterWhere(['like', 'hair_sweep_and_mop_floors2', $this->hair_sweep_and_mop_floors2])
            ->andFilterWhere(['like', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for2', $this->clean_under_chairs_from_hair_and_put_leader_conditionner_for2])
            ->andFilterWhere(['like', 'hair_remove_stains_and_dust_on_surfaces2', $this->hair_remove_stains_and_dust_on_surfaces2])
            ->andFilterWhere(['like', 'hair_clean_mirrors2', $this->hair_clean_mirrors2])
            ->andFilterWhere(['like', 'hair_clean_cart_and_trolleys2', $this->hair_clean_cart_and_trolleys2])
            ->andFilterWhere(['like', 'hair_clean_drawers_and_cabinets2', $this->hair_clean_drawers_and_cabinets2])
            ->andFilterWhere(['like', 'hair_empty_trash2', $this->hair_empty_trash2])
            ->andFilterWhere(['like', 'hair_detect_and_change_busted_light2', $this->hair_detect_and_change_busted_light2])
            ->andFilterWhere(['like', 'shampoo_sweep_and_mop_floors2', $this->shampoo_sweep_and_mop_floors2])
            ->andFilterWhere(['like', 'shampoo_clean_under_chairs_from_hair_and_put_leader2', $this->shampoo_clean_under_chairs_from_hair_and_put_leader2])
            ->andFilterWhere(['like', 'shampoo_clean_sinks_from_hair_and_product_residue2', $this->shampoo_clean_sinks_from_hair_and_product_residue2])
            ->andFilterWhere(['like', 'shampoo_clean_shampoo_bowls2', $this->shampoo_clean_shampoo_bowls2])
            ->andFilterWhere(['like', 'shampoo_empty_trash2', $this->shampoo_empty_trash2])
            ->andFilterWhere(['like', 'shampoo_remove_stains_and_dust_on_surfaces2', $this->shampoo_remove_stains_and_dust_on_surfaces2])
            ->andFilterWhere(['like', 'shampoo_clean_mirrors2', $this->shampoo_clean_mirrors2])
            ->andFilterWhere(['like', 'shampoo_clean_the_product_containers2', $this->shampoo_clean_the_product_containers2])
            ->andFilterWhere(['like', 'shampoo_empty_towel_basket2', $this->shampoo_empty_towel_basket2])
            ->andFilterWhere(['like', 'shampoo_detect_and_change_busted_light2', $this->shampoo_detect_and_change_busted_light2])
            ->andFilterWhere(['like', 'treatment_sweep_and_mop_floors2', $this->treatment_sweep_and_mop_floors2])
            ->andFilterWhere(['like', 'treatment_clean_under_chairs_from_hair_and_put_leader2', $this->treatment_clean_under_chairs_from_hair_and_put_leader2])
            ->andFilterWhere(['like', 'treatment_clean_sinks_from_hair_and_product_residue2', $this->treatment_clean_sinks_from_hair_and_product_residue2])
            ->andFilterWhere(['like', 'treatment_empty_trash2', $this->treatment_empty_trash2])
            ->andFilterWhere(['like', 'treatment_remove_stains_and_dust_on_surfaces2', $this->treatment_remove_stains_and_dust_on_surfaces2])
            ->andFilterWhere(['like', 'treatment_draw_up_the_decoration2', $this->treatment_draw_up_the_decoration2])
            ->andFilterWhere(['like', 'treatment_clean_mixed_bowls2', $this->treatment_clean_mixed_bowls2])
            ->andFilterWhere(['like', 'treatment_clean_mirrors2', $this->treatment_clean_mirrors2])
            ->andFilterWhere(['like', 'treatment_clean_the_product_container2', $this->treatment_clean_the_product_container2])
            ->andFilterWhere(['like', 'treatment_empty_used_towel_bascket2', $this->treatment_empty_used_towel_bascket2])
            ->andFilterWhere(['like', 'treatment_clean_the_product_containers22', $this->treatment_clean_the_product_containers22])
            ->andFilterWhere(['like', 'treatment_detect_and_change_busted_light2', $this->treatment_detect_and_change_busted_light2])
            ->andFilterWhere(['like', 'pedicure_the_curtains_should_be_clean2', $this->pedicure_the_curtains_should_be_clean2])
            ->andFilterWhere(['like', 'pedicure_sweep_and_mop_floors2', $this->pedicure_sweep_and_mop_floors2])
            ->andFilterWhere(['like', 'pedicure_clean_under_chairs__and_put_leader2', $this->pedicure_clean_under_chairs__and_put_leader2])
            ->andFilterWhere(['like', 'pedicure_clean_and_sanitize_sink2', $this->pedicure_clean_and_sanitize_sink2])
            ->andFilterWhere(['like', 'pedicure_empty_trash2', $this->pedicure_empty_trash2])
            ->andFilterWhere(['like', 'pedicure_remove_stains_and_dust_on_surfaces2', $this->pedicure_remove_stains_and_dust_on_surfaces2])
            ->andFilterWhere(['like', 'pedicure_remove_basket_cleaning_items_and_dirty_towels2', $this->pedicure_remove_basket_cleaning_items_and_dirty_towels2])
            ->andFilterWhere(['like', 'pedicure_remove_empty_glasses2', $this->pedicure_remove_empty_glasses2])
            ->andFilterWhere(['like', 'manicure_bar_draw_up_products2', $this->manicure_bar_draw_up_products2])
            ->andFilterWhere(['like', 'manicure_bar_empty_trash2', $this->manicure_bar_empty_trash2])
            ->andFilterWhere(['like', 'manicure_bar_clean_all_surfaces_with_a_disinfectant2', $this->manicure_bar_clean_all_surfaces_with_a_disinfectant2])
            ->andFilterWhere(['like', 'manicure_bar_clean_and_organize_nail_polish_racks2', $this->manicure_bar_clean_and_organize_nail_polish_racks2])
            ->andFilterWhere(['like', 'manicure_bar_empty_used_towel_bascket2', $this->manicure_bar_empty_used_towel_bascket2]);

        return $dataProvider;
    }
}
