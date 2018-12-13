<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2017 SalesAgility Ltd.
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
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
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
 * reasonably feasible for  technical reasons, the Appropriate Legal Notices must
 * display the words  "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

$dictionary['tc_installment'] = array(
    'table' => 'tc_installment',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
	
	'installment_amount_c' => array(
            'name' => 'installment_amount_c',
            'vname' => 'LBL_INSTALLMENT_AMOUNT_C',
            'type' => 'varchar',
            'module' => 'tc_installment',
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
	'due_date_c' => array(
            'name' => 'due_date_c',
            'vname' => 'LBL_DUE_DATE_C',
            'type' => 'date',
            'module' => 'tc_installment',
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
	'installment_paid_c' => array (
			'required' => false,
			'name' => 'installment_paid_c',
			'vname' => 'LBL_INSTALLMENT_PAID_C',
			'type' => 'bool',
			'massupdate' => 0,
			'default' => '0',
			'no_default' => false,
			'comments' => '',
			'help' => '',
			'importable' => 'true',
			'duplicate_merge' => 'disabled',
			'duplicate_merge_dom_value' => '0',
			'audited' => false,
			'inline_edit' => true,
			'reportable' => true,
			'unified_search' => false,
			'merge_filter' => 'disabled',
			'len' => '255',
			'size' => '20',
		),
		'contacts_id_c' => array(
            'name' => 'contacts_id_c',
            'vname' => 'LBL_CONTACTS_ID_C',
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
        'contacts_name_c'=> array (
            'name' => 'contacts_name_c',
            'vname' => 'LBL_CONTACTS_NAME_C',
            'type' => 'relate',
            'module' => 'Contacts',
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
            'ext2' => 'contacts',
            'id_name' => 'contacts_id_c',
            'rname' => 'name',
        ),
		'tc_dev_id_c' => array(
            'name' => 'tc_dev_id_c',
            'vname' => 'LBL_TC_DEV_ID_C',
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
        'tc_dev_name_c'=> array (
            'name' => 'tc_dev_name_c',
            'vname' => 'LBL_TC_DEV_NAME_C',
            'type' => 'relate',
            'module' => 'tc_dev',
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
            'ext2' => 'tc_dev',
            'id_name' => 'tc_dev_id_c',
            'rname' => 'name',
        ),
		 'tc_dev_c' =>
        array (
            'name' => 'tc_dev_c',
            'type' => 'link',
            'relationship' => 'rel_tc_dev_tc_installment',
            //'module' => 'Leads',
            //'bean_name' => 'Lead',
            'source' => 'non-db',
            'vname' => 'LBL_TC_Dev_TC_INSTALLMENT_SUBPANEL_C',
        ),
		'tc_procurement_id_c' => array(
            'name' => 'tc_procurement_id_c',
            'vname' => 'LBL_TC_PROCUREMENT_ID_C',
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
        'tc_procurement_name_c'=> array (
            'name' => 'tc_procurement_name_c',
            'vname' => 'LBL_TC_PROCUREMENT_NAME_C',
            'type' => 'relate',
            'module' => 'tc_procurement',
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
            'ext2' => 'tc_procurement',
            'id_name' => 'tc_procurement_id_c',
            'rname' => 'name',
        ),
		 'tc_procurement_c' =>
        array (
            'name' => 'tc_procurement_c',
            'type' => 'link',
            'relationship' => 'rel_tc_procurement_tc_installment',
            //'module' => 'Leads',
            //'bean_name' => 'Lead',
            'source' => 'non-db',
            'vname' => 'LBL_TC_PROCUREMENT_TC_INSTALLMENT_SUBPANEL_C',
        ),

),
    'relationships' => array (
	'rel_tc_procurement_tc_installment' =>
        array (
            'lhs_module'        => 'tc_procurement',
            'lhs_table'         => 'tc_procurement',
            'lhs_key'           => 'id',
            'rhs_module'        => 'tc_installment',
            'rhs_table'         => 'tc_installment',
            'rhs_key'           => 'tc_procurement_id_c',
            'relationship_type' => 'one-to-many',
        ),
	'rel_tc_dev_tc_installment' =>
        array (
            'lhs_module'        => 'tc_dev',
            'lhs_table'         => 'tc_dev',
            'lhs_key'           => 'id',
            'rhs_module'        => 'tc_installment',
            'rhs_table'         => 'tc_installment',
            'rhs_key'           => 'tc_dev_id_c',
            'relationship_type' => 'one-to-many',
        ),
		
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('tc_installment', 'tc_installment', array('basic','assignable','security_groups'));