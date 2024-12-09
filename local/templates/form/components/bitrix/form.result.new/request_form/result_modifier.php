<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
 
$arResult['funcGetInputHtml'] = function($question,$arrVALUES) {
    $id = $question['STRUCTURE'][0]['ID'];
	$type = $question['STRUCTURE'][0]['FIELD_TYPE'];
	$name = "form_{$type}_{$id}";
    $value = isset($arrVALUES[$name]) ? htmlentities($arrVALUES[$name]) : '';
	$required = $question['REQUIRED'] === 'Y' ? 'required' : '';
	if($id === '1'){
		$input = "<input class=\"input__input\" type=\"text\" id=\"medicine_name\" name=\"{$name}\" value=\"{$value}\"
                       {$required}>";
	}elseif($id === '3'){
		$input = "<input class=\"input__input\" type=\"text\" id=\"medicine_company\" name=\"{$name}\" value=\"{$value}\"
                       {$required}>";
	}elseif($id === '2'){
		$input = "<input class=\"input__input\" type=\"email\" id=\"medicine_email\" name=\"{$name}\" value=\"{$value}\"
                       {$required}>";
	}elseif($id === '5'){
		$input = "<input class=\"input__input\" type=\"tel\" id=\"medicine_phone\"
                       data-inputmask=\"'mask': '+79999999999', 'clearIncomplete': 'true'\" maxlength=\"12\"
                       x-autocompletetype=\"phone-full\" name=\"{$name}\" value=\"{$value}\" {$required}>";
	}elseif($id==='6'){
		$input = "<textarea class=\"input__input\" type=\"text\" id=\"medicine_message\" name=\"{$name}\"
                          {$required}>{$value}</textarea>";
	}
	
    return $input;
};