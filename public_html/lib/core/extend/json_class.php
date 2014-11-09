<?php
/**
 * @copyright (c) 2013 jooyea.cn
 * @file json_class.php
 * @brief �ļ�����
 * @author chendeshan
 * @date 2013-4-15
 * @version 1.0
 */

/**
 * @class JSON
 * @brief JSON json���ݸ�ʽ�Ĵ���
 */
class JSON
{
	//������JSON���ʵ��
	private static $_jsonInstance = null;

	/**
	 * @brief json���ݸ�ʽ����,֧������ԭ��ת��
	 * @param $param max Ҫ����ת��������
	 * @return String json���ݸ�ʽ
	 */
	public static function encode($param)
	{
		if(version_compare(phpversion(),'5.4.0') >= 0)
		{
			return json_encode($param,JSON_UNESCAPED_UNICODE);
		}

		$result = '';
		if(function_exists('json_encode'))
		{
			$result = json_encode($param);
		}
		else
		{
			$jsonObject = self::getJsonInstance();
			$result = $jsonObject->encodeUnsafe($param);
		}
		//�������ĵ�ת��
		return preg_replace("#\\\u([0-9a-f]{4})#ie", "iconv('UCS-2', 'UTF-8', pack('H4', '\\1'))", $result);
	}

	/**
	 * @brief ����json���ݸ�ʽ
	 * @param $string String Ҫ������json��
	 * @return max php���ݸ�ʽ
	 */
	public static function decode($string)
	{
		if(function_exists('json_decode'))
		{
			return json_decode($string,true);
		}

		$jsonObject = self::getJsonInstance();
		return $jsonObject->decode($string);
	}

	/**
	 * @brief ��ʼ��������JSON���
	 * @return Object ������json������
	 */
	private static function getJsonInstance()
	{
		if(self::$_jsonInstance == null)
		{
			include(dirname(__FILE__).'/Services_JSON-1.0.3/JSON.php');
			self::$_jsonInstance = new Services_JSON();
		}
		return self::$_jsonInstance;
	}
}