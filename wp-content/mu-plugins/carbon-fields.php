<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_record_fields');

function crb_attach_record_fields()
{
    Container::make('post_meta', 'Additional fields for a record')
        ->where('post_type', '=', 'record')
        ->add_fields(array(
            Field::make('text', 'crb_record_balance', __('Total balance of current record'))
                ->set_attribute('type', 'number')
                ->set_attribute('readOnly', 'true')
                ->set_default_value(0),
            Field::make('text', 'crb_record_credit_balance', __('Total credit balance of current record'))
                ->set_attribute('type', 'number')
                ->set_attribute('readOnly', 'true')
                ->set_default_value(0),
            Field::make('text', 'crb_record_debit_balance', __('Total debit balance of current record'))
                ->set_attribute('type', 'number')
                ->set_attribute('readOnly', 'true')
                ->set_default_value(0),
            Field::make('complex', 'crb_record_credit_history', __('All the credit record history'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'credit_amount', __('Amount credited'))
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'credit_frequency', __('Frequency of the credited amount'))
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'total_credit', __('Credit Amount x Frequency'))
                        ->set_attribute('readOnly', 'true')
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'credit_comment', __('Comments or Remarks'))
                        ->set_required(true),
                ))
                ->set_required(true),
            Field::make('complex', 'crb_record_debit_history', __('All the debit record history'))
                ->set_layout('tabbed-horizontal')
                ->add_fields(array(
                    Field::make('text', 'debit_amount', __('Amount debited'))
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'debit_frequency', __('Frequency of the debited amount'))
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'total_debit', __('Debit Amount x Frequency'))
                        ->set_attribute('readOnly', 'true')
                        ->set_attribute('type', 'number')
                        ->set_required(true),
                    Field::make('text', 'debit_comment', __('Comments or Remarks'))
                        ->set_required(true),
                ))
                ->set_required(true),
        ));
}
