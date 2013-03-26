<?php

class plugin_info{
    static $PLUGIN_CODE       = "FixedBottomButton";
    static $PLUGIN_NAME       = "どこでも登録ボタン";
    static $CLASS_NAME        = "FixedBottomButton";
    static $PLUGIN_VERSION    = "0.1";
    static $COMPLIANT_VERSION = "2.12";
    static $AUTHOR            = "Nobuhiko Kimoto";
    static $DESCRIPTION       = "長い画面の一番下にあって使いづらい登録ボタンを画面に常に表示するようにします";
    static $PLUGIN_SITE_URL   = "http://nob-log.info/";
    static $AUTHOR_SITE_URL   = "http://nob-log.info/";
    static $HOOK_POINTS       =  array(
        array('prefilterTransform'),
        array('outputfilterTransform'),
    );
    static $LICENSE           = "LGPL";
}

