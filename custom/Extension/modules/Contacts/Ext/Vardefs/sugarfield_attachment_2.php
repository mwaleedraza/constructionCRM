<?php
<?php

$GLOBALS['dictionary']['Contact']['fields']['filename2'] = array (

     'name' => 'filename2',

     'vname' => 'LBL_FILENAME_2',

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

 $GLOBALS['dictionary']['Contact']['fields']['file_mime_type2'] = array(

     'name' => 'file_mime_type2',

     'vname' => 'LBL_FILE_MIME_TYPE_2',

     'type' => 'varchar',

     'len' => '100',

     'comment' => 'Attachment MIME type',

     'importable' => false,

);

$GLOBALS['dictionary']['Contact']['fields']['file_url2'] = array (

     'name' => 'file_url2',

     'vname' => 'LBL_FILE_URL_2',

     'type' => 'varchar',

     'source' => 'non-db',

     'reportable' => false,

     'comment' => 'Path to file (can be URL)',

     'importable' => false,

); 