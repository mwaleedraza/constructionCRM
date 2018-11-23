<?php
<?php

$GLOBALS['dictionary']['tc_procurement']['fields']['filename1'] = array (

     'name' => 'filename1',

     'vname' => 'LBL_FILENAME_1',

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

 $GLOBALS['dictionary']['tc_procurement']['fields']['file_mime_type1'] = array(

     'name' => 'file_mime_type1',

     'vname' => 'LBL_FILE_MIME_TYPE_1',

     'type' => 'varchar',

     'len' => '100',

     'comment' => 'Attachment MIME type',

     'importable' => false,

);

$GLOBALS['dictionary']['tc_procurement']['fields']['file_url1'] = array (

     'name' => 'file_url1',

     'vname' => 'LBL_FILE_URL_1',

     'type' => 'varchar',

     'source' => 'non-db',

     'reportable' => false,

     'comment' => 'Path to file (can be URL)',

     'importable' => false,

); 