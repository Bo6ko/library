<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE',						0644);
define('FILE_WRITE_MODE',						0666);
define('DIR_READ_MODE',							0755);
define('DIR_WRITE_MODE',						0777);

/*
|--------------------------------------------------------------------------
| Smarty directories
|--------------------------------------------------------------------------
|
| These directories are used for smarty: cache, compile and templates
|
*/

define('SMARTY_CACHE_DIR',						APPPATH.'cache/smarty/cache/');
define('SMARTY_COMPILE_DIR',					APPPATH.'cache/smarty/compile/');
define('SMARTY_TEMPLATE_DIR',					APPPATH.'views/');

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb');
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b');
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

/*
|--------------------------------------------------------------------------
| File Path
|--------------------------------------------------------------------------
|
| These paths are used when working with project folders
|
*/

define('LOCAL_PATH',											str_replace('system/','',BASEPATH));
define('LOCAL_PATH_ADMIN',									    LOCAL_PATH.'admin/');

define('WEB_PATH',												'http://'.$_SERVER['HTTP_HOST'].'/');
define('WEB_PATH_ADMIN',										WEB_PATH.'admin/');

/*
|--------------------------------------------------------------------------
| Database tables
|--------------------------------------------------------------------------
|
| These constants are used when working with database tables
|
*/

define('TABLE_ACTUALITES',						    'actualites');
define('TABLE_ADMINISTRATORS',				        'administrators');
define('TABLE_BOOKS',				                'books');
define('TABLE_BOOKS_LANGUAGES',				        'books_languages');
define('TABLE_BOOK_AUTHORS',				        'book_authors');
define('TABLE_BOOK_CATEGORIES',				        'book_categories');
define('TABLE_BOOK_PUBLISHERS',				        'book_publishers');
define('TABLE_CLIENTS',				                'clients');
define('TABLE_CLIENT_PROMOTION_PERIODS',			'client_promotion_periods');
define('TABLE_CLIENT_TYPES',				        'client_types');
define('TABLE_COUNTRIES',				            'countries');
define('TABLE_LANGUAGE',				            'language');
define('TABLE_PROMOTION_PACKAGES',				    'promotion_packages');
define('TABLE_PROMOTION_PACKAGE_BOOKS',				'promotion_package_books');
define('TABLE_RENTS',				                'rents');
	
/*
|--------------------------------------------------------------------------
| Project constants
|--------------------------------------------------------------------------
|
| These constants are used when working with project settings
|
*/
define('NOREPLY',								str_replace('www.', '', ENVIRONMENT));
define('MANAGER',								'CPM system');
define('MANAGER_VERSION',						'0.4beta');
define('MANAGER_AUTHOR',						'CP Manager');
define('MANAGER_SUPPORT',						'');
define('PROJECT',								'Groupe Fairplay');
define('PROJECT_EMAIL_NOREPLY',					'noreply@'.NOREPLY);
define('PROJECT_EMAIL_FROM',					'noreply@'.NOREPLY);
define('PROJECT_EMAIL_TO',						'jonathan@3wnet.fr');
define('PROJECT_EMAIL_COPY',					'jonathan@3wnet.fr');
define('PROJECT_EMAIL_BCC',						'jonathan@3wnet.fr');
define('ROBOTS',								'noindex, nofollow');
define('REVISIT_AFTER',							'5 days');
define('COOKIE_COURTOIS_VOTE',					'courtois_vote');
define('IS_LOCALHOST',							(strpos($_SERVER['HTTP_HOST'], '.localhost') !== false));

/*
|--------------------------------------------------------------------------
| Buttons and messages
|--------------------------------------------------------------------------
|
| These constants are used when working with manager buttons and messages
|
*/
define('BTN_UPDATE',							'Mise à jour');
define('BTN_CREATE',							'Ajouter');
define('MSG_SYSTEM_ERROR',						'Error: Pas notifié au système.');
define('MSG_UPDATE_ERROR',						'Error: Pas notifié au système.');
define('MSG_UPDATE_ERROR_POST',					'Pas de données POST.');
define('MSG_UPDATE_SUCCESS',					'Les modifications ont été apportées avec succès.');
define('MSG_DELETE_SUCCESS',					'Suppression effectuée avec succès.');
define('MSG_DELETE_MISSING',					'Essayer de supprimer un objet inexistant.');
define('MSG_SEO_DUPLICATED',					'Cette URL de SEO est déjà utilisée. Merci d\'en choisir une autre.');

/*
|--------------------------------------------------------------------------
| Other
|--------------------------------------------------------------------------
|
| Others constants used for the project
|
*/
define('MAX_PAGE_KEYWORDS',						'30');
define('MAX_PAGE_KEYWORDS_LETTERS',				'50');


/*
|--------------------------------------------------------------------------
| System validators
|--------------------------------------------------------------------------
|
| These validatos are used when validate form
|
*/

//	Not empty. 
define('VALID_NOT_EMPTY',						'/.+/');
//	Numbers only.
define('VALID_NUMBER',							'/^[0-9]+$/');
//	Date as YYYY-MM-DD.
define('VALID_DATE',							'/(\d+)-(\d+)-(\d+)/');
//	Digit > 0.
define('POSITIVE_NUMBER',						'/^0*[1-9][0-9]*$/');
//	A valid email address.
define('VALID_EMAIL',							'/\\A(?:^([a-z0-9][a-z0-9_\\-\\.\\+]*)@([a-z0-9][a-z0-9\\.\\-]{0,63}\\.(com|org|net|biz|info|name|net|pro|aero|coop|museum|[a-z]{2,4}))$)\\z/i');
//	Valid password (5-20) symbols.
define('VALID_PASSWORD',						'/^(.{5,20})$/');
//	Valid zip (5-20) symbols.
define('VALID_ZIP',								'/^[0-9]{4}$/');
//	A valid year (1000-2999).
define('VALID_YEAR',							'/^[12][0-9]{3}$/');
//	A valid url address.
define('VALID_URL',								"/((ht|f)tps*:\/\/)((([a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3}))|(([0-9]{1,3}\.){3}([0-9]{1,3})))((\/|\?)[a-z0-9~#%&'_\+=:\?\.-]*)*)$/");
//	A valid link name.
define('VALID_LINK_NAME',						'/^[a-zA-Z0-9\s\/\_-]+$/');
//	A valid user name.
define('VALID_USERNAME',						'/^[a-zA-Z0-9\_]{3,20}$/');
//	A valid ЕИК.
define('VALID_BULSTAT',							'/^[0-9]{9,13}$/');
//	A valid TEXT.
define('VALID_TEXT',							'/^[a-zA-Z0-9\s\/\_\;\@\#\$\%\^\&\*\(\)\+\,\.\!\?\[\]-]+$/');
//	A security code
define('VALID_SECURITY',						'/^[a-zA-Z0-9]{5}$/');
//	Alpha-numeric characters only
define('VALID_ALNUM_NS',						'/^[a-zA-Z0-9]*$/');
//	Alpha-numeric characters with spaces only
define('VALID_ALNUM_WS',						'/^[a-zA-Z0-9 ]*$/');
//	Alphabetic characters only
define('VALID_ALPHA',							'/^[a-zA-Z]*$/');
//	Lowercase letters only
define('VALID_LOWER',							'/^([a-z])*$/');
//	Uppercase letters only
define('VALID_UPPER',							'/^([A-Z])*$/');
//	Date (MM/DD/YYYY)
define('VALID_DATE_F1',							'/^((0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01])[- /.](19|20)?[0-9]{2})*$/');
//	Date (YYYY/MM/DD)
define('VALID_DATE_F2',							'#^((19|20)?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#');
//	Date (DD/MM/YYYY)
define('VALID_DATE_F3',							'/(0[1-9]|[12][0-9]|3[01])[ \/.](0[1-9]|1[012])[ \/.](19|20)\d\d/');
//	IP address regex
define('VALID_IP',								'/^((?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?))*$/');
//	Float number
define('VALID_FLOAT',							'/^-?(?:\d+|\d*\.\d+)$/');


/*
|--------------------------------------------------------------------------
| Session timeout and cookie settings
|--------------------------------------------------------------------------
|
| These constants are used when working with sessions and cookies
|
*/

define('TIMEOUT_UTILISATEUR',					3600);
define('TIMEOUT_CONCESSIONAIRE',				3600);
define('TIMEOUT_MANAGER',						36000);
define('TIMEOUT_USER',							36000);
define('COOKIE_EXPIRE',							60*60*24*100);
define('COOKIE_PATH',							'/');

/* End of file constants.php */
/* Location: ./application/config/constants.php */