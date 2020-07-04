<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],
            [
                'id'    => '17',
                'title' => 'user_alert_create',
            ],
            [
                'id'    => '18',
                'title' => 'user_alert_show',
            ],
            [
                'id'    => '19',
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => '20',
                'title' => 'user_alert_access',
            ],
            [
                'id'    => '21',
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => '22',
                'title' => 'audit_log_access',
            ],
            [
                'id'    => '23',
                'title' => 'faq_management_access',
            ],
            [
                'id'    => '24',
                'title' => 'faq_category_access',
            ],
            [
                'id'    => '25',
                'title' => 'faq_question_access',
            ],
            [
                'id'    => '26',
                'title' => 'faq_category_create',
            ],
            [
                'id'    => '27',
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => '28',
                'title' => 'faq_category_show',
            ],
            [
                'id'    => '29',
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => '30',
                'title' => 'faq_question_create',
            ],
            [
                'id'    => '31',
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => '32',
                'title' => 'faq_question_show',
            ],
            [
                'id'    => '33',
                'title' => 'faq_question_delete',
            ],
            // expense & asset mgt persmissions
            [
                'id'    => '34',
                'title' => 'expense_management_access',
            ],
            [
                'id'    => '35',
                'title' => 'expense_category_create',
            ],
            [
                'id'    => '36',
                'title' => 'expense_category_edit',
            ],
            [
                'id'    => '37',
                'title' => 'expense_category_show',
            ],
            [
                'id'    => '38',
                'title' => 'expense_category_delete',
            ],
            [
                'id'    => '39',
                'title' => 'expense_category_access',
            ],
            [
                'id'    => '40',
                'title' => 'income_category_create',
            ],
            [
                'id'    => '41',
                'title' => 'income_category_edit',
            ],
            [
                'id'    => '42',
                'title' => 'income_category_show',
            ],
            [
                'id'    => '43',
                'title' => 'income_category_delete',
            ],
            [
                'id'    => '44',
                'title' => 'income_category_access',
            ],
            [
                'id'    => '45',
                'title' => 'expense_create',
            ],
            [
                'id'    => '46',
                'title' => 'expense_edit',
            ],
            [
                'id'    => '47',
                'title' => 'expense_show',
            ],
            [
                'id'    => '48',
                'title' => 'expense_delete',
            ],
            [
                'id'    => '49',
                'title' => 'expense_access',
            ],
            [
                'id'    => '50',
                'title' => 'income_create',
            ],
            [
                'id'    => '51',
                'title' => 'income_edit',
            ],
            [
                'id'    => '52',
                'title' => 'income_show',
            ],
            [
                'id'    => '53',
                'title' => 'income_delete',
            ],
            [
                'id'    => '54',
                'title' => 'income_access',
            ],
            [
                'id'    => '55',
                'title' => 'expense_report_create',
            ],
            [
                'id'    => '56',
                'title' => 'expense_report_edit',
            ],
            [
                'id'    => '57',
                'title' => 'expense_report_show',
            ],
            [
                'id'    => '58',
                'title' => 'expense_report_delete',
            ],
            [
                'id'    => '59',
                'title' => 'expense_report_access',
            ],
            [
                'id'    => '60',
                'title' => 'asset_management_access',
            ],
            [
                'id'    => '61',
                'title' => 'asset_category_create',
            ],
            [
                'id'    => '62',
                'title' => 'asset_category_edit',
            ],
            [
                'id'    => '63',
                'title' => 'asset_category_show',
            ],
            [
                'id'    => '64',
                'title' => 'asset_category_delete',
            ],
            [
                'id'    => '65',
                'title' => 'asset_category_access',
            ],
            [
                'id'    => '66',
                'title' => 'asset_location_create',
            ],
            [
                'id'    => '67',
                'title' => 'asset_location_edit',
            ],
            [
                'id'    => '68',
                'title' => 'asset_location_show',
            ],
            [
                'id'    => '69',
                'title' => 'asset_location_delete',
            ],
            [
                'id'    => '70',
                'title' => 'asset_location_access',
            ],
            [
                'id'    => '71',
                'title' => 'asset_status_create',
            ],
            [
                'id'    => '72',
                'title' => 'asset_status_edit',
            ],
            [
                'id'    => '73',
                'title' => 'asset_status_show',
            ],
            [
                'id'    => '74',
                'title' => 'asset_status_delete',
            ],
            [
                'id'    => '75',
                'title' => 'asset_status_access',
            ],
            [
                'id'    => '76',
                'title' => 'asset_create',
            ],
            [
                'id'    => '77',
                'title' => 'asset_edit',
            ],
            [
                'id'    => '78',
                'title' => 'asset_show',
            ],
            [
                'id'    => '79',
                'title' => 'asset_delete',
            ],
            [
                'id'    => '80',
                'title' => 'asset_access',
            ],
            [
                'id'    => '81',
                'title' => 'assets_history_access',
            ],
            [
                'id'    => '82',
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}