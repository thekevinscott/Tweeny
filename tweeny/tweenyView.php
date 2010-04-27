<?php
function bring($file) {
	if (substr($file,-4) != '.php') { $file .= '.php'; }

	if (file_exists(APP.'/views/'.$file)) {
		require APP.'/views/'.$file;
	} else if (file_exists(APP.'/'.$file)) {
		require APP.'/'.$file;		
	}
}