<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Salonarea;

/**
 * backend\models\SalonareaSearch represents the model behind the search form about `backend\models\Salonarea`.
 */
 class SalonareaSearch extends Salonarea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'shampoo_sweep_and_mop_floors', 'shampoo_clean_under_chairs_from_hair_and_put_leader', 'created_at', 'updated_at', 'created_by', 'updated_by', 'checked_by', 'deleted_by', 'deleted_at'], 'integer'],
            [['hair_sweep_and_mop_floors', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', 'hair_remove_stains_and_dust_on_surfaces', 'hair_clean_mirrors', 'hair_clean_cart_and_trolleys', 'hair_clean_drawers_and_cabinets', 'hair_empty_trash', 'hair_detect_and_change_busted_light', 'shampoo_clean_sinks_from_hair_and_product_residue', 'shampoo_clean_shampoo_bowls', 'shampoo_empty_trash', 'shampoo_remove_stains_and_dust_on_surfaces', 'shampoo_clean_mirrors', 'shampoo_clean_the_product_containers', 'shampoo_empty_towel_basket', 'shampoo_detect_and_change_busted_light', 'treatment_sweep_and_mop_floors', 'treatment_clean_under_chairs_from_hair_and_put_leader', 'treatment_clean_sinks_from_hair_and_product_residue', 'treatment_empty_trash', 'treatment_remove_stains_and_dust_on_surfaces', 'treatment_draw_up_the_decoration', 'treatment_clean_mixed_bowls', 'treatment_clean_mirrors', 'treatment_clean_the_product_containers', 'treatment_empty_used_towel_bascket', 'treatment_clean_the_product_containers2', 'treatment_detect_and_change_busted_light', 'pedicure_the_curtains_should_be_clean', 'pedicure_sweep_and_mop_floors', 'pedicure_clean_under_chairs__and_put_leader', 'pedicure_clean_and_sanitize_sink', 'pedicure_empty_trash', 'pedicure_remove_stains_and_dust_on_surfaces', 'pedicure_remove_basket_cleaning_items_and_dirty_towels', 'pedicure_remove_empty_glasses', 'manicure_bar_draw_up_products', 'manicure_bar_empty_trash', 'manicure_bar_clean_all_surfaces_with_a_disinfectant', 'manicure_bar_clean_and_organize_nail_polish_racks', 'manicure_bar_empty_used_towel_bascket', 'shift_am', 'shift_pm', 'shift_date', 'lock'], 'safe'],
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
        $query = Salonarea::find();

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
            'shampoo_sweep_and_mop_floors' => $this->shampoo_sweep_and_mop_floors,
            'shampoo_clean_under_chairs_from_hair_and_put_leader' => $this->shampoo_clean_under_chairs_from_hair_and_put_leader,
            'shift_am' => $this->shift_am,
            'shift_pm' => $this->shift_pm,
            'shift_date' => $this->shift_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'checked_by' => $this->checked_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
        ]);

        $query->andFilterWhere(['like', 'hair_sweep_and_mop_floors', $this->hair_sweep_and_mop_floors])
            ->andFilterWhere(['like', 'clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha', $this->clean_under_chairs_from_hair_and_put_leader_conditionner_for_cha])
            ->andFilterWhere(['like', 'hair_remove_stains_and_dust_on_surfaces', $this->hair_remove_stains_and_dust_on_surfaces])
            ->andFilterWhere(['like', 'hair_clean_mirrors', $this->hair_clean_mirrors])
            ->andFilterWhere(['like', 'hair_clean_cart_and_trolleys', $this->hair_clean_cart_and_trolleys])
            ->andFilterWhere(['like', 'hair_clean_drawers_and_cabinets', $this->hair_clean_drawers_and_cabinets])
            ->andFilterWhere(['like', 'hair_empty_trash', $this->hair_empty_trash])
            ->andFilterWhere(['like', 'hair_detect_and_change_busted_light', $this->hair_detect_and_change_busted_light])
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
            ->andFilterWhere(['like', 'lock', $this->lock]);

        return $dataProvider;
    }
}
