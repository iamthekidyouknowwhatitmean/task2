<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>

<div class="contact-form">
	<div class="contact-form__head">
		<div class="contact-form__head-title">Связаться</div>
		<div class="contact-form__head-text">Наши сотрудники помогут выполнить подбор услуги и&nbsp;расчет цены с&nbsp;учетом
			ваших требований
		</div>
	</div>

	<?php
		$a = $arResult["FORM_HEADER"];
		
		$f = "<form class = \"contact-form__form\"".substr($a,5);
		print_r($f);
	?>
	<input type="hidden" name="web_form_submit" value="Y">

		
		<div class="contact-form__form-inputs">
			<div class="input contact-form__input">
				<label class="input__label" for="medicine_name">
					<div class="input__label-text">
						<?=$arResult["QUESTIONS"]['NAME']['CAPTION']?><?=($arResult["QUESTIONS"]['NAME']['REQUIRED'] === 'Y' ? '*' : '')?>
					</div>
					<?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['NAME'],$arResult['arrVALUES'])?>
					<div class="input__notification">Поле должно содержать не менее 3-х символов</div>
				</label>
			
			</div>
			
			<div class="input contact-form__input">
				<label class="input__label" for="medicine_company">
					<div class="input__label-text">
						<?=$arResult["QUESTIONS"]['COMPANY']['CAPTION']?><?=($arResult["QUESTIONS"]['COMPANY']['REQUIRED'] === 'Y' ? '*' : '')?>
					</div>
					<?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['COMPANY'],$arResult['arrVALUES'])?>
					<div class="input__notification">Поле должно содержать не менее 3-х символов</div>
				</label>
			</div>
			
			<div class="input contact-form__input">
				<label class="input__label" for="medicine_email">
					<div class="input__label-text">
					<?=$arResult["QUESTIONS"]['EMAIL']['CAPTION']?><?=($arResult["QUESTIONS"]['EMAIL']['REQUIRED'] === 'Y' ? '*' : '')?>
					</div>
					
					<?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['EMAIL'],$arResult['arrVALUES'])?>
					<div class="input__notification">Поле должно содержать не менее 3-х символов</div>
				</label>
			</div>
			
			
			<div class="input contact-form__input">
				<label class="input__label" for="medicine_phone">
					<div class="input__label-text">
						<?=$arResult["QUESTIONS"]['PHONE']['CAPTION']?><?=($arResult["QUESTIONS"]['PHONE']['REQUIRED'] === 'Y' ? '*' : '')?>
					</div>
					<?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['PHONE'],$arResult['arrVALUES'])?>
					<div class="input__notification">Поле должно содержать не менее 3-х символов</div>
				</label>
			</div>
		</div>
		<div class="contact-form__form-message">
			<div class="input"><label class="input__label" for="medicine_message">
				<div class="input__label-text"><?=$arResult["QUESTIONS"]['MESSAGE']['CAPTION']?><?=($arResult["QUESTIONS"]['MESSAGE']['REQUIRED'] === 'Y' ? '*' : '')?></div>
				<?=$arResult['funcGetInputHtml']($arResult["QUESTIONS"]['MESSAGE'],$arResult['arrVALUES']);?>
				<div class="input__notification"></div>
			</label></div>
		</div>
		<div class="contact-form__bottom">
			<div class="contact-form__bottom-policy">Нажимая &laquo;Отправить&raquo;, Вы&nbsp;подтверждаете, что
				ознакомлены, полностью согласны и&nbsp;принимаете условия &laquo;Согласия на&nbsp;обработку персональных
				данных&raquo;.
			</div>

			<button class="form-button contact-form__bottom-button" data-success="Отправлено"
                    data-error="Ошибка отправки">
				<div class="form-button__title"><?=$arResult["arForm"]["BUTTON"]?></div>
			</button>
		</div>
	<?=$arResult["FORM_FOOTER"]?>
</div>
