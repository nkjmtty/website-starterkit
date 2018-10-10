<?php
	//print_r( $_SERVER );echo "<hr>";
	//return false;
	
	//$tmpScriptName = $_SERVER["SCRIPT_NAME"];
	//$tmpFilePath = $_SERVER['DOCUMENT_ROOT'] . preg_replace('/\//', '\\', $_SERVER['REQUEST_URI']);
	
//	$tmpFilePath = substr( $_SERVER['REQUEST_URI'], 1 );
//	set_include_path( get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'\\');
//	$tmpFilePath = $_SERVER['REQUEST_URI'];
	$tmpFilePath = preg_replace('/(\?.+)$/', '', $_SERVER['REQUEST_URI']);
	//echo $tmpFilePath,"<br>";
	if( !preg_match("/\..+$/", $tmpFilePath) ){
		if( !preg_match("/\/$/", $tmpFilePath) ){
		//	echo '★', $tmpFilePath,"<br>";
			$tmpFilePath .= '/';
		}
	//	$tmpFilePath .= 'index.html';
	//	echo '★', preg_replace('/.+\/([^\/]+\..+)$/', "$1", $_SERVER['SCRIPT_NAME']),"<br>";
		$tmpFilePath .= preg_replace('/.*\/([^\/]+\..+)$/', "$1", $_SERVER['SCRIPT_NAME']);
	}
	//echo $tmpFilePath,"<br>";
	$myIdealScriptFilename = $_SERVER['DOCUMENT_ROOT'] . preg_replace('/\//', '\\', $tmpFilePath);
	
	
	//echo is_readable( $myIdealScriptFilename );
	//
	//exit;
	
	//echo $_SERVER['DOCUMENT_ROOT'],"<br>";
	//echo '$myIdealScriptFilename:  ',$myIdealScriptFilename,"<br>";
	//echo '★',is_readable( $myIdealScriptFilename ),"<br>";
	
	/*
	$pieces = explode('/', substr( $_SERVER['REQUEST_URI'], 1 ) );
	print_r( $pieces ); echo "<br>";
	
	
	
	//echo $tmpScriptName,"<br>";
	echo $tmpFilePath,"<br>";
	//echo preg_match("/\\\\$/", $tmpFilePath),"<br>";
	echo substr( $tmpScriptName, 1 ),"<br>";
	
	if( preg_match("/\\\\$/", $tmpFilePath) )
		$tmpFilePath .= 'index.html';
	//	$tmpFilePath .= substr( preg_replace('/\//', '\\', $tmpScriptName), 1 );
	
	echo $tmpFilePath,"<br>";
	echo '★',is_readable( $tmpFilePath ),"<br>";
	
	exit;
	*/
	//echo "<hr>";
	if( is_readable( $myIdealScriptFilename ) ){
		
		switch (1){
			case preg_match('/\.(?:html|htm)$/', $myIdealScriptFilename):
			//	header('Content-Type: text/html');
			//	echo get_include_path(), "<br>";
			//	set_include_path( 'C:\\Users\\t.nakajima\\-develop\\stage.v1800\\18xxxx_xx_CLIENT_ID：SITE_NAME：DISCRIPTION：PROJECT_NUMBER\\src\\' );
			//	echo get_include_path(), "<br>";
			//	require_once( substr( $tmpScriptName, 1 ) );
			//	readfile( $myIdealScriptFilename );
			//	set_include_path( get_include_path().PATH_SEPARATOR.$_SERVER['DOCUMENT_ROOT'].'\\');
			//	set_include_path( get_include_path().PATH_SEPARATOR.dirname($myIdealScriptFilename).'\\');
				require( $myIdealScriptFilename );
				break;
			
			case preg_match('/\.ico$/', $myIdealScriptFilename):
				header('Content-Type: image/x-icon');
				readfile( $myIdealScriptFilename );
				
				break;
			
			case preg_match('/\.css$/', $myIdealScriptFilename):
				header('Content-Type: text/css');
				readfile( $myIdealScriptFilename );
				
				break;
			
			case preg_match('/\.((?:png|gif|bmp))$/', $myIdealScriptFilename, $aMatches):
				header('Content-Type: image/' . $aMatches[1]);
				readfile( $myIdealScriptFilename );
				
				break;
			
			case preg_match('/\.jpe?g$/', $myIdealScriptFilename, $aMatches):
				header('Content-Type: image/jpeg');
				readfile( $myIdealScriptFilename );
				
				break;
			
			case preg_match('/\.svg$/', $myIdealScriptFilename):
				header("Content-Type: image/svg+xml");
				readfile( $myIdealScriptFilename );
				
				break;
			
			case preg_match('/\.js$/', $myIdealScriptFilename):
				header("Content-Type: text/javascript");
				readfile( $myIdealScriptFilename );
				
				break;
			
			default:
				return false;
		}
	
	}else{
		header("HTTP/1.1 404 Not Found");
		return false;
		/*
		echo '<p>hoge</p>';
		exit;
		*/
	}
?>