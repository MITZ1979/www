<?php
	function f_postfix($f_type, $f_upfiles){
		$is_pass = false;
		$tmp_upfies = split("\.", $f_upfiles);
		$tmp_num = count($tmp_upfiles);
		for($num = 0 ; $num < count($f_type); $num++){
			if(strtolower($tmp_upfiles[$tmp_num - 1]) == $f_type["$num"]){
				$is_pass = $f_type["$num"];
			}
				
		}
		return $is_pass;
	}

	function f_postfix($f_type, $f_upfiles){
		$is_pass = false;
		$tmp_upfiles = split("\.", $f_upfiles);
		$tmp_num = count()
	}
?>