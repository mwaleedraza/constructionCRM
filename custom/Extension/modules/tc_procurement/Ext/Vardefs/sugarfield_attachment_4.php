<?php
<?php

$GLOBALS['dictionary']['tc_procurement']['fields']['filename4'] = array (

     'name' => 'filename4',

     'vname' => 'LBL_FILENAME_4',

     'type' => 'file',

     'dbType' => 'varchar',

     'len' => '255',

     'reportable' => true,

     'comment' => 'File name associated with the note (attachment)',

     'importable' => false,
	 'default' => '',
        'required' => false,
        'reportable' => true,
        'audited' => false,
        'importable' => 'true',
        'unified_search' => false,
        'duplicate_merge' => 'disabled',
        'merge_filter' => 'disabled',
        'duplicate_merge_dom_value' => '0',

);

 $GLOBALS['dictionary']['tc_procurement']['fields']['file_mime_type4'] = array(

     'name' => 'file_mime_type4',

     'vname' => 'LBL_FILE_MIME_TYPE_4',

     'type' => 'varchar',

     'len' => '100',

     'comment' => 'Attachment MIME type',

     'importable' => false,

);

$GLOBALS['dictionary']['tc_procurement']['fields']['file_url4'] = array (

     'name' => 'file_url4',

     'vname' => 'LBL_FILE_URL_4',

     'type' => 'varchar',

     'source' => 'non-db',

     'reportable' => false,

     'comment' => 'Path to file (can be URL)',

     'importable' => false,

); 