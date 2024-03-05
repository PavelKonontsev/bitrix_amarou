<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
    <?if(!empty($arResult["ERROR_MESSAGE"]))
    {
        foreach($arResult["ERROR_MESSAGE"] as $v)
            ShowError($v);
    }
    if($arResult["OK_MESSAGE"] <> '')
    {
        ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
    }
    ?>

<form action="<?=POST_FORM_ACTION_URI?>" method="POST">
    <?=bitrix_sessid_post()?>
    <div class="row">

        <div class="col-sm-12">
            <h4 class="contact-panel__title">Request A Quote</h4>
            <p class="contact-panel__desc mb-40">We take great pride in everything that we do, complete control
              over products allows us to ensure our customers receive the best quality service.
            </p>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Phone" name="user_phone" value="<?=$arResult["user_phone"]?>"<?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("user_phone", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="form-group">
                <select class="form-control" style="display: none;" name="industry" value="<?=$arResult["industry"]?>">
                    <option>select your industry</option>
                    <option>Petroleum &amp; Gas Energy</option>
                    <option>Construction &amp; Engineering</option>
                    <option>Mechanical Engineering</option>
                </select>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
                <textarea class="form-control" placeholder="Additional Details!" name="MESSAGE" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?> required<?endif?>><?=$arResult["MESSAGE"]?></textarea>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">

            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <button type="submit" name="submit" class="btn btn__secondary mr-40" value="<?=GetMessage("MFT_SUBMIT")?>">
                <i class="icon-arrow-right"></i> <span>Submit Request</span>
            </button>
            <div class="form-group input-radio my-3">
                <label class="label-radio">I accept the privacy and terms.
                    <input type="checkbox" name='rules' checked="" >
                    <span class="radio-indicator"></span>
                </label>
            </div>
        </div>

    </div>
</form>
