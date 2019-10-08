<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( !function_exists( 'stringToDashes' ) )
	{
		function stringToDashes($text, $limit=255)
		{
			//Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
			$text = mb_strtolower($text);
			//Strip any unwanted characters
			$text = preg_replace("/[^a-zа-яàâæçéèêëïîôœùûüÿрстуфхцчшщъью0-9_\s-]/", "", $text);
			//Clean multiple dashes or whitespaces
			$text = preg_replace("/[\s-]+/", " ", $text);
			//Convert whitespaces and underscore to dash
			$text = preg_replace("/[\s_]/", "-", $text);
			// Тrim
			$text = trim($text, '-');
			$text = trim($text);
			
			if(strlen($text) > ( $limit - 5 ) ) {
				$text = substr($text, 0, ( $limit - 5 ));
			} 
			
			if (empty($text))
			{
				//return 'n-a';
				return time();
			}
			
			return $text;
		}
	}
	
	if ( !function_exists( 'cleanFilename' ) )
	{
		function cleanFilename($text,$separator = '_')
		{
			$normalizeChars = array(
			    'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
			    'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
			    'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
			    'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
			    'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
			    'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
			    'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
			);
			
			//Output: E A I A I A I A I C O E O E O E O O e U e U i U i U o Y o a u a y c
			$text =  strtr($text, $normalizeChars);
			
			//Unwanted:  {UPPERCASE} ; / ? : @ & = + $ , . ! ~ * ' ( )
			$text = mb_strtolower($text);
			//Strip any unwanted characters
			$text = preg_replace("/[^a-zA-Z0-9_\s-]/", "", $text);
			//Clean multiple dashes or whitespaces
			$text = preg_replace("/[\s-]+/", " ", $text);
			//Convert whitespaces and underscore to dash
			$text = preg_replace("/[\s_]/", "-", $text);
			// Тrim
			$text = trim($text, $separator);
			$text = trim($text);
			
			if (empty($text))
			{
				//return 'n-a';
				return time();
			}
			
			return $text;
		}
	}
	
	if ( !function_exists( 'cycle' ) )
	{
		function cycle($first_value, $values = '*') {
		  // keeps up with all counters
		  static $count = array();
		
		  // get all arguments passed
		  $values = func_get_args();
		
		  // set the default name to use
		  $name = 'default';
		
		  // check if last items begins with ":"
		  $last_item = end($values);
		  if( substr($last_item, 0, 1) === ':' ) {
		
		    // change the name to the new one
		    $name = substr($last_item, 1);
		
		    // remove the last item from the array
		    array_pop($values);
		  }
		
		  // make sure counter starts at zero for the name
		  if( !isset($count[$name]) )
		    $count[$name] = 0;
		
		  // get the current item for its index
		  $index = $count[$name] % count($values);
		
		  // update the count and return the value
		  $count[$name]++;
		  return $values[$index];  
		}
	}
	
	if ( !function_exists( 'generate_code' ) )
	{
		function generate_code()
		{
			return sha1(md5(microtime()));
		}
	}

	if ( !function_exists( 'convertDate' ) )
	{
		function convertDate( $date )
		{
			$array	= explode('/', $date);
			if (is_array($array) && count($array) == 3)
				return $array[2].'-'.$array[1].'-'.$array[0];
			
			return '';
		}
	}
	
	if ( !function_exists( 'convertDateFrFormat' ) )
	{
		function convertDateFrFormat( $date )
		{
			$array	= explode('-', $date);
			if (is_array($array) && count($array) == 3)
				return $array[2].'/'.$array[1].'/'.$array[0];
			
			return '';
		}
	}
	
	if ( !function_exists( 'generate_password' ) )
	{
		function generate_password( $length )
		{
			return substr(md5(uniqid(rand(), TRUE)), 0, $length);
		}
	}

	if ( !function_exists( 'generate_random_code' ) )
	{
		function generate_random_code( $length = 8 )
		{
			$code = '';
			$characters = '123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
			
			for ( $i = 0; $i < $length; $i++ )
			{
				$random = $characters[mt_rand(1, strlen($characters)-1)];
				if ( $random == "" )
				{
					$random = "X";
				}
				$code .= $random;
			}
			
			return $code;
		}
	}

	if ( !function_exists( 'generate_seo_url' ) )
	{
		function generate_seo_url($string, $force_lowercase = TRUE, $anal = FALSE)
		{
			$array = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]","}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;","a€", "a€", ",", "<", ".", ">", "/", "?");
			$clean = trim(str_replace($array, "", strip_tags($string)));
			$clean = preg_replace('/\s+/', "-", $clean);
			$clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "-", $clean) : $clean ;
			return ($force_lowercase) ?
				(function_exists('mb_strtolower')) ?
					mb_strtolower($clean, 'UTF-8') :
					strtolower($clean) :
				$clean;
		}
	}

	if ( !function_exists( 'json_format' ) )
	{
		function json_format($json) {
		  if (!is_string($json)) {
		    if (phpversion() && phpversion() >= 5.4) {
		      return json_encode($json, JSON_PRETTY_PRINT);
		    }
		    $json = json_encode($json);
		  }
		  $result      = '';
		  $pos         = 0;               // indentation level
		  $strLen      = strlen($json);
		  $indentStr   = "\t";
		  $newLine     = "\n";
		  $prevChar    = '';
		  $outOfQuotes = true;
		
		  for ($i = 0; $i < $strLen; $i++) {
		    // Speedup: copy blocks of input which don't matter re string detection and formatting.
		    $copyLen = strcspn($json, $outOfQuotes ? " \t\r\n\",:[{}]" : "\\\"", $i);
		    if ($copyLen >= 1) {
		      $copyStr = substr($json, $i, $copyLen);
		      // Also reset the tracker for escapes: we won't be hitting any right now
		      // and the next round is the first time an 'escape' character can be seen again at the input.
		      $prevChar = '';
		      $result .= $copyStr;
		      $i += $copyLen - 1;      // correct for the for(;;) loop
		      continue;
		    }
		    
		    // Grab the next character in the string
		    $char = substr($json, $i, 1);
		    
		    // Are we inside a quoted string encountering an escape sequence?
		    if (!$outOfQuotes && $prevChar === '\\') {
		      // Add the escaped character to the result string and ignore it for the string enter/exit detection:
		      $result .= $char;
		      $prevChar = '';
		      continue;
		    }
		    // Are we entering/exiting a quoted string?
		    if ($char === '"' && $prevChar !== '\\') {
		      $outOfQuotes = !$outOfQuotes;
		    }
		    // If this character is the end of an element,
		    // output a new line and indent the next line
		    else if ($outOfQuotes && ($char === '}' || $char === ']')) {
		      $result .= $newLine;
		      $pos--;
		      for ($j = 0; $j < $pos; $j++) {
		        $result .= $indentStr;
		      }
		    }
		    // eat all non-essential whitespace in the input as we do our own here and it would only mess up our process
		    else if ($outOfQuotes && false !== strpos(" \t\r\n", $char)) {
		      continue;
		    }
		
		    // Add the character to the result string
		    $result .= $char;
		    // always add a space after a field colon:
		    if ($outOfQuotes && $char === ':') {
		      $result .= ' ';
		    }
		
		    // If the last character was the beginning of an element,
		    // output a new line and indent the next line
		    else if ($outOfQuotes && ($char === ',' || $char === '{' || $char === '[')) {
		      $result .= $newLine;
		      if ($char === '{' || $char === '[') {
		        $pos++;
		      }
		      for ($j = 0; $j < $pos; $j++) {
		        $result .= $indentStr;
		      }
		    }
		    $prevChar = $char;
		  }
		
		  return $result;
		}
				
	}

	if ( !function_exists( 'create_path' ) )
	{
		function create_path( $root , $path )
		{
			return false; 
			if ( !is_dir($root) )
			{
				umask(0022);
				mkdir( $root, 0777 );
			}
			
			if ( strlen( $path ) > 0 )
			{
				$path_arr = explode( '/', $path );
				if ( is_array( $path_arr ) && count( $path_arr ) > 0 )
				{
					$completed_dir = $root;
					foreach ( $path_arr as $dir )
					{
						if ( strlen( $dir ) == 0 )
							continue;
							
						if ( !is_dir( $completed_dir . $dir ) )
						{
							umask(0022);
							mkdir( $completed_dir . $dir, 0777 );
						}
						
						$completed_dir .= $dir . '/';
					}
					copy( LOCAL_PATH . 'index.html' , $completed_dir . 'index.html' );
					return $completed_dir;
				} 
				else 
				{
					return FALSE;
				}
			}
			else 
			{
				return FALSE;
			}
		}
	}
	
	if ( !function_exists( 'set_message' ) )
	{
		function set_message( $response = array() )
		{
			$_SESSION['message'] = $response;
		}
	}
	
	if ( !function_exists( 'get_message' ) )
	{
		function get_message()
		{
			$response = null;
			if ( isset($_SESSION['message']) ) {
				$response = $_SESSION['message'];
				unset($_SESSION['message']);
			}
			
			return $response;
		}
	}
	
?>