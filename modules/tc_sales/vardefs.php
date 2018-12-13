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

$dictionary['tc_sales'] = array(
    'table' => 'tc_sales',
    'audited' => true,
    'inline_edit' => true,
    'duplicate_merge' => true,
    'fields' => array (
	'land_area' => 
	array(
		'name' => 'land_area',
        'vname' => 'LBL_LAND_AREA',
        'type' => 'varchar',
        'module' => 'tc_sales',
        'help' => 'land area',
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
		'land_price' => 
	array(
		'name' => 'land_price',
        'vname' => 'LBL_LAND_PRICE',
        'type' => 'varchar',
        'module' => 'tc_sales',
        'help' => 'land price',
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
		'land_price_received' => 
	array(
		'name' => 'land_price_received',
        'vname' => 'LBL_LAND_PRICE_RECEIVED',
        'type' => 'varchar',
        'module' => 'tc_sales',
        'help' => 'land price received',
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
		'land_price_due' => 
	array(
		'name' => 'land_price_due',
        'vname' => 'LBL_LAND_PRICE_DUE',
        'type' => 'varchar',
        'module' => 'tc_sales',
        'help' => 'land price due',
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
		'area_unit' => array(
            'name' => 'area_unit',
            'vname' => 'LBL_AREA_UNIT',
            'type' => 'enum',
            'options' => 'area_unit_dom',
            'len' => '100',
            'audited' => true,
            'comment' => 'Area Unit',
            'merge_filter' => 'enabled',
        ),
		'land_type' => array(
            'name' => 'land_type',
            'vname' => 'LBL_LAND_TYPE',
            'type' => 'enum',
            'options' => 'land_type_dom',
            'len' => '100',
            'audited' => true,
            'comment' => 'Land Type',
            'merge_filter' => 'enabled',
        ),
		'commission_fee' => 
	array(
		'name' => 'commission_fee',
        'vname' => 'LBL_COMMISSION_FEE',
        'type' => 'varchar',
        'module' => 'tc_sales',
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
		'is_parent' => array(
            'name' => 'is_parent',
            'vname' => 'LBL_IS_PARENT',
            'type' => 'bool',
            'module' => 'tc_sales',
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
		 'parent_id' => array(
            'name' => 'parent_id',
            'vname' => 'LBL_PARENT_ID',
            'type' => 'varchar',
            'module' => 'tc_sales',
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
		'amount_c1' => 
	array(
		'name' => 'amount_c1',
        'vname' => 'LBL_AMOUNT_C1',
        'type' => 'varchar',
        'module' => 'tc_sales',
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
		'amount_c2' => 
	array(
		'name' => 'amount_c2',
        'vname' => 'LBL_AMOUNT_C2',
        'type' => 'varchar',
        'module' => 'tc_sales',
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
		'amount_c3' => 
	array(
		'name' => 'amount_c3',
        'vname' => 'LBL_AMOUNT_C3',
        'type' => 'varchar',
        'module' => 'tc_sales',
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
		'contacts_id_c1' =>	array(
			'name'=>'contacts_id_c1',
			'type'=>'id',
			/* 'group'=>'billing_address', */
			'vname'=>'LBL_CONTACTS_ID_C1',
			'table' => 'contacts',
			'isnull' => 'true',
			'module' => 'Contacts',
			/* 'dbType' => 'id', */
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),		
	 	'contacts_name_c1'=> array(
			'name'=>'contacts_name_c1',
			'rname'=>'name',
			'type'=>'relate',
			/* 'group'=>'billing_address', */
			'id_name'=>'contacts_id_c1',
			'vname'=>'LBL_CONTACTS_NAME_C1',
			/* 'link'=>'billing_accounts',
			'table'=>'billing_accounts', */
			'isnull'=>'true',
			'ext2'=>'contacts',
			'module'=>'Contacts',
			'importable' => 'required',
			'required'=>true,
		), 
		'contacts_id_c2' =>	array(
			'name'=>'contacts_id_c2',
			'type'=>'id',
			/* 'group'=>'billing_address', */
			'vname'=>'LBL_CONTACT_ID_C2',
			'table' => 'contacts',
			'isnull' => 'true',
			'module' => 'Contacts',
			/* 'dbType' => 'id', */
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),		
	 	'contacts_name_c2'=> array(
			'name'=>'contacts_name_c2',
			'rname'=>'name',
			'type'=>'relate',
			/* 'group'=>'billing_address', */
			'id_name'=>'contacts_id_c2',
			'vname'=>'LBL_CONTACTS_NAME_C2',
			/* 'link'=>'billing_accounts',
			'table'=>'billing_accounts', */
			'isnull'=>'true',
			'ext2'=>'contacts',
			'module'=>'Contacts',
			'importable' => 'required',
			'required'=>true,
		), 
		'contacts_id_c3' =>	array(
			'name'=>'contacts_id_c3',
			'type'=>'id',
			/* 'group'=>'billing_address', */
			'vname'=>'LBL_CONTACTS_ID_C3',
			'table' => 'contacts',
			'isnull' => 'true',
			'module' => 'Contacts',
			/* 'dbType' => 'id', */
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),		
	 	'contacts_name_c3'=> array(
			'name'=>'contacts_name_c3',
			'rname'=>'name',
			'type'=>'relate',
			/* 'group'=>'billing_address', */
			'id_name'=>'contacts_id_c3',
			'vname'=>'LBL_CONTACTS_NAME_C3',
			/* 'link'=>'billing_accounts',
			'table'=>'billing_accounts', */
			'isnull'=>'true',
			'ext2'=>'contacts',
			'module'=>'Contacts',
			'importable' => 'required',
			'required'=>true,
		), 
		'contacts_id_c4' =>	array(
			'name'=>'contacts_id_c4',
			'type'=>'id',
			/* 'group'=>'billing_address', */
			'vname'=>'LBL_CONTACTS_ID_C4',
			'table' => 'contacts',
			'isnull' => 'true',
			'module' => 'Contacts',
			/* 'dbType' => 'id', */
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),		
	 	'contacts_name_c4'=> array(
			'name'=>'contacts_name_c4',
			'rname'=>'name',
			'type'=>'relate',
			/* 'group'=>'billing_address', */
			'id_name'=>'contacts_id_c4',
			'vname'=>'LBL_CONTACTS_NAME_C4',
			/* 'link'=>'billing_accounts',
			'table'=>'billing_accounts', */
			'isnull'=>'true',
			'ext2'=>'contacts',
			'module'=>'Contacts',
			'importable' => 'required',
			'required'=>true,
		), 
		'project_id_c' =>	array(
			'name'=>'project_id_c',
			'type'=>'id',
			/* 'group'=>'billing_address', */
			'vname'=>'LBL_PROJECT_ID_C',
			'table' => 'project',
			'isnull' => 'true',
			'module' => 'Project',
			/* 'dbType' => 'id', */
			'reportable' => false,
			'massupdate' => false,
			'duplicate_merge' => 'disabled',
		),		
	 	'project_name_c'=> array(
			'name'=>'project_name_c',
			'rname'=>'name',
			'type'=>'relate',
			/* 'group'=>'billing_address', */
			'id_name'=>'project_id_c',
			'vname'=>'LBL_PROJECT_NAME_C',
			/* 'link'=>'billing_accounts',
			'table'=>'billing_accounts', */
			'isnull'=>'true',
			'ext2'=>'Project',
			'module'=>'Project',
			'importable' => 'required',
			'required'=>true,
		), 
		'project_c'=> array(
		'name' => 'project_c',
		'type' => 'link',
		'relationship' => 'project_tc_sales',
		/* 'module' => 'inv_Invoices',
		'bean_name' => 'inv_Invoices', */
		'source' => 'non-db',
		'vname' => 'LBL_PROJECT_C',
),
),
    'relationships' => array (
	'project_tc_sales'=> array(
		  'lhs_module' => 'Project',
          'lhs_table' => 'project',
          'lhs_key' => 'id',
          'rhs_module' => 'tc_sales',
          'rhs_table' => 'tc_sales',
          'rhs_key' => 'project_id_c',
          'relationship_type' => 'one-to-many',
),
),
    'optimistic_locking' => true,
    'unified_search' => true,
);
if (!class_exists('VardefManager')) {
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('tc_sales', 'tc_sales', array('basic','assignable','security_groups'));