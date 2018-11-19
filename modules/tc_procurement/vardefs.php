<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['tc_procurement'] = array(
    'table' => 'tc_procurement',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
        'total_area_c' => array(
            'name' => 'total_area_c',
            'vname' => 'LBL_TOTAL_AREA_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
        ),
        'price_per_unit_c' => array(
            'name' => 'price_per_unit_c',
            'vname' => 'LBL_PRICE_PER_UNIT_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
        ),
        'area_unit_c' => array(
            'name' => 'area_unit_c',
            'vname' => 'LBL_AREA_UNIT_C',
            'type' => 'enum',
            'options' => 'area_unit_c_dom',
            'len' => '100',
            'audited' => true,
            'comment' => 'Area Unit',
            'merge_filter' => 'enabled',
        ),
        'total_amount_c' => array(
            'name' => 'total_amount_c',
            'vname' => 'LBL_TOTAL_AMOUNT_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
        ),
        'amount_paid_c' => array(
            'name' => 'amount_paid_c',
            'vname' => 'LBL_AMOUNT_PAID_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
        ),
        'amount_due_c' => array(
            'name' => 'amount_due_c',
            'vname' => 'LBL_AMOUNT_DUE_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
        ),
        'payment_method_c' => array(
            'name' => 'payment_method_c',
            'vname' => 'LBL_PAYMENT_METHOD_C',
            'type' => 'enum',
            'options' => 'payment_method_dom',
            'len' => '100',
            'audited' => true,
            'comment' => 'Area Unit',
            'merge_filter' => 'enabled',
        ),
        'vendor_c' => array(
            'name' => 'vendor_c',
            'vname' => 'LBL_VENDOR_C',
            'type' => 'varchar',
            'module' => 'tc_procurement',
            'help' => '',
            'comment' => '',
            'default' => '',
            'required' => false,
            'reportable' => true,
            'audited' => false,
            'importable' => 'true',
            'unified_search' => false,
            'duplicate_merge' => 'disabled',
            'merge_filter' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'len' => '255'
        ),
        'project_id_c' => array(
            'name' => 'project_id_c',
            'vname' => 'LBL_PROJECT_ID_C',
            'type' => 'id',
            'massupdate' => 0,
            'required' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => 0,
            'audited' => false,
            'reportable' => false,
            'unified_search' => false,
            'merge_filter' => 'disabled',
        ),
        'project_name_c' => array (
            'name' => 'project_name_c',
            'vname' => 'LBL_PROJECT_NAME_C',
            'type' => 'relate',
            'module' => 'Project',
            'source' => 'non-db',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'required' => 'false',
            'duplicate_merge' => 'disabled',
            'audited' => true,
            'reportable' => true,
            'studio' => 'visible',
            'ext2' => 'project',
            'id_name' => 'project_id_c',
            'rname' => 'name',
        ),
        'project_c' =>
        array (
            'name' => 'project_c',
            'type' => 'link',
            'relationship' => 'rel_project_tc_procurement',
            //'module' => 'Leads',
            //'bean_name' => 'Lead',
            'source' => 'non-db',
            'vname' => 'LBL_PROJECT_TC_PROCUREMENT_SUBPANEL_C',
        ),
),
    'relationships' => array (
        'rel_project_tc_procurement' =>
        array (
            'lhs_module'        => 'Project',
            'lhs_table'         => 'project',
            'lhs_key'           => 'id',
            'rhs_module'        => 'tc_procurement',
            'rhs_table'         => 'tc_procurement',
            'rhs_key'           => 'project_id_c',
            'relationship_type' => 'one-to-many',
        ),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('tc_procurement', 'tc_procurement', array('basic','assignable','security_groups'));