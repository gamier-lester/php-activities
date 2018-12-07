<?php

function vowel_count($haystack) {
			//this is a regular expression
			$vowel_regex = "/[aeiou]/";
			return preg_match_all($vowel_regex, $haystack);
		}


function is_palindrome($input_str) {
			$string_length = strlen($input_str);
			$input_str = strtolower($input_str);

			for ($x=0; $x < $string_length/2; $x++) { 
				// echo $input_str[$i]."<br>";

				//look for mismatch and return false
				if($input_str[$x] != $input_str[$string_length-$x-1]){
					return FALSE;
				}
				// echo $input_str[$x] . " - " . $input_str[($string_length-$x)-1] . "<br>";
			}

			return TRUE;
		}
?>