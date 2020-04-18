<?php
namespace TangJun\WechatSDK;
/**
 * Created by PhpStorm.
 * User: tangjun
 * Date: 2020-04-18
 * Time: 15:46
 */

/**
 * error code
 * 仅用作类内部使用，不用于官方API接口的errCode码
 */
class QErrorCode
{
    public static $OK = 0;
    public static $ValidateSignatureError = 40001;
    public static $ParseXmlError = 40002;
    public static $ComputeSignatureError = 40003;
    public static $IllegalAesKey = 40004;
    public static $ValidateAppidError = 40005;
    public static $EncryptAESError = 40006;
    public static $DecryptAESError = 40007;
    public static $IllegalBuffer = 40008;
    public static $EncodeBase64Error = 40009;
    public static $DecodeBase64Error = 40010;
    public static $GenReturnXmlError = 40011;
    public static $errCode=array(
        '0'=>'无问题',
        '40001'=>'签名验证错误',
        '40002'=>'xml解析失败',
        '40003'=>'sha加密生成签名失败',
        '40004'=>'encodingAesKey 非法',
        '40005'=>'appid 校验错误',
        '40006'=>'aes 加密失败',
        '40007'=>'aes 解密失败',
        '40008'=>'解密后得到的buffer非法',
        '40009'=>'base64加密失败',
        '40010'=>'base64解密失败',
        '40011'=>'生成xml失败',
    );
    public static function getErrText($err) {
        if (isset(self::$errCode[$err])) {
            return self::$errCode[$err];
        }else {
            return false;
        };
    }
}