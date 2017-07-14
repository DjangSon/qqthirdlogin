<?php
/**
 * Describe
 * User          黄力军
 * DateAdded     2017/7/11
 * DateModified
 */
define("QQ_THIRD_LOGIN_CLASS_PATH", dirname(__FILE__) . "/class/");

spl_autoload_register(function () {
	require_once(QQ_THIRD_LOGIN_CLASS_PATH . "QC.php");
	require_once(QQ_THIRD_LOGIN_CLASS_PATH . "Oauth.php");
	require_once(QQ_THIRD_LOGIN_CLASS_PATH . "ErrorCase.php");
	require_once(QQ_THIRD_LOGIN_CLASS_PATH . "URL.php");
	require_once(QQ_THIRD_LOGIN_CLASS_PATH . "Recorder.php");
});
