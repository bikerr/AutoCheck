<?php
	class HttpUtil {
		private $url;
		private $cookie;
		private $pattern;
		private $referer;
		private $postContent;

		/**
		*  @description  pattern为0时post方法,其他get方法
		*/
		function __construct($pattern) {
			$this->pattern = $pattern;
			$url = '';
			$cookie = '';
			$pattern = 1;
			$referer = '';
			$postContent = '';
		}

		function setUrl($url) {
			$this->url = $url;
		}

		function setCookie($cookie) {
			$this->cookie = $cookie;
		}

		function setReferer($referer) {
			$this->referer = $referer;
		}

		function setPostContent($postContent) {
			$this->postContent = $postContent;
		}

		function run() {
		$ch=curl_init($this->url);

		if($this->pattern = 0) {
			curl_setopt($ch,CURLOPT_POST,true);  
			curl_setopt($ch, CURLOPT_POSTFIELDS,$this->postContent);
		}
    		
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent:Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko/20100101 Firefox/39.0','Connection:keep-alive','Referer:'.$this->referer,'X-Requested-With: XMLHttpRequest','Accept-Encoding: gzip, deflate','Accept-Language: zh-CN,zh;q=0.8,en-US;q=0.5,en;q=0.3','Accept: */*'));
    		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    		curl_setopt($ch,CURLOPT_COOKIE,$this->cookie); 
   		 $get_url = curl_exec($ch);
    		curl_close($ch);
    		echo $get_url;
		}
	}

	
?>
