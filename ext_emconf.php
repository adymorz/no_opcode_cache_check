<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Hide opcode cache check in system environment check',
	'description' => 'In case you are running your TYPO3 system in an environment where no opcode cache is available and you do not want to see errors in the system environment check about that (which causes a lot of emails using the system status update cron job) this extension is for you.',
	'category' => 'backend',
	'shy' => 0,
	'version' => '1.0.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Adrian Dymorz',
	'author_email' => 'dev@adrian.dymorz.ch',
	'author_company' => '',
	'CGLcompliance' => NULL,
	'CGLcompliance_note' => NULL,
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.0-0.0.0',
			'typo3' => '6.0.0-6.2.99'
		),
		'conflicts' => '',
		'suggests' => 
		array (
		),
	),
);

?>