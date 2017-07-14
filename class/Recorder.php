<?php
/* PHP SDK
 * @version 2.0.0
 * @author connect@qq.com
 * @copyright © 2013, Tencent Corporation. All rights reserved.
 */
namespace QQThirdLogin;

class Recorder{
    private static $data;
    private $inc;
    private $error;

    public function __construct(){
        $this->error = new ErrorCase();

        //-------配置SDK类属性
        $this->inc->appid = 'appid';
        $this->inc->appkey = 'appkey';
		$this->inc->callback = 'http://localhost/laravel/public/callback';
		$this->inc->scope = 'get_user_info';
		$this->inc->errorReport = true;
		$this->inc->storageType = 'file';
        if(empty($this->inc)){
            $this->error->showError("20001");
        }

        if(empty(session('QC_userData'))){
            self::$data = array();
        }else{
            self::$data = session('QC_userData');
        }
    }

    public function write($name,$value){
        self::$data[$name] = $value;
    }

    public function read($name){
        if(empty(self::$data[$name])){
            return null;
        }else{
            return self::$data[$name];
        }
    }

    public function readInc($name){
        if(empty($this->inc->$name)){
            return null;
        }else{
            return $this->inc->$name;
        }
    }

    public function delete($name){
        unset(self::$data[$name]);
    }

    function __destruct(){
		session(['QC_userData' => self::$data]);
    }
}
