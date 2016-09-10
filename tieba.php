<?php
/**
 *贴吧自动签到
 */
class tieba {

  private $cookie;

  function __construct($cookie)
  {
    $this->cookie = $cookie;
  }

  public function curl_get($url,$ua=false){
      $ch=curl_init($url);
      if ($ua){
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent:Mozilla/5.0 (Linux; U; Android 2.3.4; zh-cn; W806 Build/GRJ22) AppleWebKit/530.17 (KHTML, like Gecko) FlyFlow/2.4 Version/4.0 Mobile Safari/530.17 baidubrowser/042_1.8.4.2_diordna_008_084/AIDIVN_01_4.3.2_608W/1000591a/9B673AC85965A58761CF435A48076629%7C880249110567268/1'));
      }
      else{
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent:Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0','Connection:keep-alive','Referer:http://wapp.baidu.com/'));
      }
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch,CURLOPT_COOKIE,$this->cookie);
      $get_url = curl_exec($ch);
      curl_close($ch);
      return $get_url;
  }

  public function sign(){

  	$kw_name = $this->getmylike();

      $arr = explode(';', $kw_name);
      if (count($arr)>0)
      {
          foreach ($arr as $key => $value)
          {
              if ($value == '')
                  continue;
              $url = "http://tieba.baidu.com/mo/m?kw={$value}";
              $get_url = $this->curl_get($url);
              preg_match_all('/<td style="text-align:right;"><a href="(.*?)">签到<\/a>/', $get_url, $matches);
              if (isset($matches[1][0]))
              {
                  $s = str_replace('&amp;', '&', $matches[1][0]);
                  $sign_url = 'http://tieba.baidu.com'.$s;
                  $get_sign = $this->curl_get($sign_url,true);
                  if (strpos($get_sign, '签到成功'))
                  {
                      echo iconv('GB2312', 'UTF-8', urldecode($value))."-签到成功<br/>";
                  }
                  else{
                      sleep(1);//休息一秒后重复一次，简单应对频率太快。
                      $get_sign = $this->curl_get($sign_url,true);
                  }
              }
              elseif (strpos($get_url, '已签到')){
                  echo iconv('GB2312', 'UTF-8', urldecode($value))."-已经签到<br/>";
              }
              else{
                  echo iconv('GB2312', 'UTF-8', urldecode($value))."-未知错误<br/>";
              }
          }
      }
  }

  public function getmylike(){
      $islogin = "http://tieba.baidu.com/dc/common/tbs?t=".time();
      $check = json_decode($this->curl_get($islogin));
      if (!$check->is_login){
          echo "可能是Cookie设置错误了。";
          exit();
      }
      $mylikeurl="http://tieba.baidu.com/f/like/mylike?";
      $result = $this->curl_get($mylikeurl);
      $page = 2;
      $result2 = $this->curl_get($mylikeurl.'&pn=2');
      $result .= $result2;
      while (strpos($result2, '/f?kw')) {
          $page ++;
          $result2 = $this->curl_get($mylikeurl.'&pn='.$page);
          $result .=$result2;
      }
      $pre_reg = '/f\?kw=(.*?)"/';
      preg_match_all($pre_reg, $result, $matches);
      $i = 0;
      $kw_name = '';
      foreach ($matches[1] as $key => $value) {
          $kw_name .= $value.';';
          $i ++;
      }
      echo "获取结束,一共[ $i ]个贴吧<br/>";
      return $kw_name;
  }
}

header("content-Type: text/html; charset=Utf-8");
$cookieArr = require_once 'cookie.php';

foreach ($cookieArr as $key => $val) {
	$tieba = new tieba($val);
	$tieba->sign();
}

?>
