<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FrontHouse;

/**
 * backend\models\FronthouseSearch represents the model behind the search form about `backend\models\FrontHouse`.
 */
 class FronthouseSearch extends FrontHouse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'created_by','branch_id', 'updated_by', 'deleted_by', 'deleted_at', 'created_at', 'updated_at', 'checked_by'], 'integer'],
            [['turn_on_lights', 'turn_off_alarm', 'read_foh_logbook', 'organize_newspapers', 'indoor_plants', 'clean_and_wipe_chairs', 'sweep_mop_floors', 'no_busted_light_bulbs', 'turn_on_tv', 'turn_on_pos', 'receive_cashiers', 'scan_days_appointment', 'print_therapists_schedule', 'brochures_are_available', 'print_customer_appointments', 'prepare_food_canapes', 'prepare_tea_bags', 'brew_coffee', 'necessary_cleaning', 'empty_trash_bins', 'ensure_lively_interaction', 'remove_dirty_dishes', 'hand_over_of_pos', 'write_on_logbook', 'put_all_used_gift_certificates', 'close_pos', 'empty_trash_bins_and_sanitize', 'throw_out_dated_newspapers', 'turn_off_all_lights', 'set_on_alarm_system', 'lock_the_door', 'notes', 'lock', 'shift_am', 'shift_pm', 'shift_date'], 'safe'],
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
        $query = FrontHouse::find();
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
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'deleted_by' => $this->deleted_by,
            'deleted_at' => $this->deleted_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'checked_by' => $this->checked_by,
        ]);

        $query->andFilterWhere(['like', 'turn_on_lights', $this->turn_on_lights])
            ->andFilterWhere(['like', 'turn_off_alarm', $this->turn_off_alarm])
            ->andFilterWhere(['like', 'read_foh_logbook', $this->read_foh_logbook])
            ->andFilterWhere(['like', 'organize_newspapers', $this->organize_newspapers])
            ->andFilterWhere(['like', 'indoor_plants', $this->indoor_plants])
            ->andFilterWhere(['like', 'clean_and_wipe_chairs', $this->clean_and_wipe_chairs])
            ->andFilterWhere(['like', 'sweep_mop_floors', $this->sweep_mop_floors])
            ->andFilterWhere(['like', 'no_busted_light_bulbs', $this->no_busted_light_bulbs])
            ->andFilterWhere(['like', 'turn_on_tv', $this->turn_on_tv])
            ->andFilterWhere(['like', 'turn_on_pos', $this->turn_on_pos])
            ->andFilterWhere(['like', 'receive_cashiers', $this->receive_cashiers])
            ->andFilterWhere(['like', 'scan_days_appointment', $this->scan_days_appointment])
            ->andFilterWhere(['like', 'print_therapists_schedule', $this->print_therapists_schedule])
            ->andFilterWhere(['like', 'brochures_are_available', $this->brochures_are_available])
            ->andFilterWhere(['like', 'print_customer_appointments', $this->print_customer_appointments])
            ->andFilterWhere(['like', 'prepare_food_canapes', $this->prepare_food_canapes])
            ->andFilterWhere(['like', 'prepare_tea_bags', $this->prepare_tea_bags])
            ->andFilterWhere(['like', 'brew_coffee', $this->brew_coffee])
            ->andFilterWhere(['like', 'necessary_cleaning', $this->necessary_cleaning])
            ->andFilterWhere(['like', 'empty_trash_bins', $this->empty_trash_bins])
            ->andFilterWhere(['like', 'ensure_lively_interaction', $this->ensure_lively_interaction])
            ->andFilterWhere(['like', 'remove_dirty_dishes', $this->remove_dirty_dishes])
            ->andFilterWhere(['like', 'hand_over_of_pos', $this->hand_over_of_pos])
            ->andFilterWhere(['like', 'write_on_logbook', $this->write_on_logbook])
            ->andFilterWhere(['like', 'put_all_used_gift_certificates', $this->put_all_used_gift_certificates])
            ->andFilterWhere(['like', 'close_pos', $this->close_pos])
            ->andFilterWhere(['like', 'empty_trash_bins_and_sanitize', $this->empty_trash_bins_and_sanitize])
            ->andFilterWhere(['like', 'throw_out_dated_newspapers', $this->throw_out_dated_newspapers])
            ->andFilterWhere(['like', 'turn_off_all_lights', $this->turn_off_all_lights])
            ->andFilterWhere(['like', 'set_on_alarm_system', $this->set_on_alarm_system])
            ->andFilterWhere(['like', 'lock_the_door', $this->lock_the_door])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'lock', $this->lock])
            ->andFilterWhere(['like', 'shift_am', $this->shift_am])
            ->andFilterWhere(['like', 'shift_pm', $this->shift_pm])
            ->andFilterWhere(['like', 'shift_date', $this->shift_date]);

        return $dataProvider;
    }
}
