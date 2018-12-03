<?php
<?php

$GLOBALS['dictionary']['Contact']['fields']['filename'] = array (

     'name' => 'filename',

     'vname' => 'LBL_FILENAME_5',

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

 $GLOBALS['dictionary']['Contact']['fields']['file_mime_type'] = array(

     'name' => 'file_mime_type',

     'vname' => 'LBL_FILE_MIME_TYPE_5',

     'type' => 'varchar',

     'len' => '100',

     'comment' => 'Attachment MIME type',

     'importable' => false,

);

$GLOBALS['dictionary']['Contact']['fields']['file_url'] = array (

     'name' => 'file_url',

     'vname' => 'LBL_FILE_URL_5',

     'type' => 'varchar',

     'source' => 'non-db',

     'reportable' => false,

     'comment' => 'Path to file (can be URL)',

     'importable' => false,

); 