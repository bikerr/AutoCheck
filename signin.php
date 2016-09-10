<?php	
	require_once("HttpUtil.php");
	$acfunUrl='http://www.acfun.tv/member/checkin.aspx';
        $acfunCookie = 'uuid=b3e062e2-2c66-477d-885c-5c759523fb16; Hm_lvt_bc75b9260fe72ee13356c664daa5568c=1442900991; Hm_lpvt_bc75b9260fe72ee13356c664daa5568c=1442901020; JSESSIONID=c742431e051549abb84ebc4780da41b3; clientlanguage=zh_CN; auth_key=1449319; auth_key_ac_sha1=275149990; auth_key_ac_sha1_="0N2QKvidemC3qz+JIdSjHVe7TAA="; ac_username=BQsummer; ac_userimg=http%3A%2F%2Fcdn.aixifan.com%2Fdotnet%2Fartemis%2Fu%2Fcms%2Fwww%2F201506%2F20113638fomw.jpg; _sid_=c742431e051549abb84ebc4780da41b3; synchronous_status=1;';
	$acfunReferer = 'http://www.acfun.tv/member/';
	$acfunPost = new HttpUtil(0);
	$acfunPost->setCookie($acfunCookie);
	$acfunPost->setUrl($acfunUrl);
	$acfunPost->setReferer($acfunReferer);
	$acfunPost->setPostContent("");
	$acfunPost->run();

	$minecraftUrl = 'http://www.mcbbs.net/home.php?mod=space&uid=357985';
        $minecraftCookie = '_ga=GA1.2.1527354105.1428150177;_gat=1;Hm_lpvt_affdf09dddabcdf2d681acefa474b973=1442903535;Hm_lvt_affdf09dddabcdf2d681acefa474b973=1440551523,1442059313,1442740581,1442903461;pgv_pvi=4240137216;pgv_si=s9410135040;CNZZDATA4434322=cnzz_eid%3D1571070097-1428149333-http%253A%252F%252Fwww.mcbbs.net%252F%26ntime%3D1442901359;ZxYQ_2132_auth=f895OF3GGh9w3Tpl9EVCwLf8gxh%2BPZNskion0trxqp99FW4lZ1yCUqCxYNx2aT5bw6D%2FiZVvWwrkTmgrETLUKiqlLjg;ZxYQ_2132_forum_lastvisit=D_479_1442740471D_1015_1442740684D_179_1442740567;ZxYQ_2132_home_diymode=1;ZxYQ_2132_lastact=1442903391%09home.php%09spacecp;ZxYQ_2132_lastcheckfeed=357985%7C1442740641;ZxYQ_2132_lastvisit=1442736838;ZxYQ_2132_lip=211.103.107.229%2C1442740641;ZxYQ_2132_nofavfid=1;ZxYQ_2132_onlineusernum=3217;ZxYQ_2132_saltkey=uxaqwRww;ZxYQ_2132_sendmail=1;ZxYQ_2132_sid=sz3tJT;ZxYQ_2132_smile=10D1;ZxYQ_2132_st_p=357985%7C1442903314%7C42016edf1c2a203c44b33c1f9b80ccc7;ZxYQ_2132_ulastactivity=37a1kKABlVsqusfIZqOxN1ZDebUmtGiKQVHlqGTnZOjCPA10sWEx;ZxYQ_2132_viewid=tid_81246;ZxYQ_2132_visitedfid=185D179D1015D479D110D43D39D155D139D67;';
	$minecraftReferer = 'http://www.mcbbs.net/';
	$minecraftPost = new HttpUtil(1);
	$minecraftPost->setCookie($minecraftCookie);
	$minecraftPost->setUrl($minecraftUrl);
	$minecraftPost->setReferer($minecraftReferer);
	$minecraftPost->run();

	$kafanUrl='http://bbs.kafan.cn/plugin.php?id=dsu_amupper&ppersubmit=true&formhash=706305dc&infloat=yes&handlekey=dsu_amuppe';
        $kafanCookie = '__cfduid=d565d21d0ce88eb037e009a7aa3514b1f1432550228;r6pb_69df_auth=4f89tVWdOBgdEio5Qc%2FKdhZ8T%2Fk7c1oVSvta3lEuAQuwCyD6ibL8nsrpYeke3oc45gWgex5g2KtQoftlsxi4%2B3bOC2E;r6pb_69df_client_created=1441796552;r6pb_69df_client_token=907B5BE7CBE4F9A976FFCAB7D3E83F11;r6pb_69df_con_request_uri=http%3A%2F%2Fbbs.kafan.cn%2Fconnect.php%3Fmod%3Dlogin%26op%3Dcallback%26referer%3Dhttp%253A%252F%252Fbbs.kafan.cn%252F;r6pb_69df_connect_is_bind=1;r6pb_69df_connect_last_report_time=2015-09-09;r6pb_69df_connect_login=1;r6pb_69df_connect_uin=907B5BE7CBE4F9A976FFCAB7D3E83F11;r6pb_69df_dsu_amupper=CjxkaXYgY2xhc3M9InBwZXJ3Ym0iIGlkPSJwcGVyd2JfbWVudSIgc3R5bGU9ImRpc3BsYXk6IG5vbmUiID4KPEEgSFJFRj0icGx1Z2luLnBocD9pZD1kc3VfYW11cHBlcjpwcGVybGlzdCIgdGFyZ2V0PSJfYmxhbmsiPiFzaG93bGlzdCE8L0E%2BCjxzdHJvbmc%2BIWFkZHVwITxzcGFuIGNsYXNzPSJ0aW1lcyI%2BMzE5PC9zcGFuPiF0aW1lcyE8L3N0cm9uZz48YnI%2BCgo8QSBIUkVGPSJmb3J1bS5waHA%2FbW9kPXZpZXd0aHJlYWQmYW1wO3RpZD0xODUxODMxJmFtcDthdXRob3JpZD04OTM1NDgiIHRhcmdldD0iX2JsYW5rIj4hc2hvd3Bvc3QhPC9BPgoKPHN0cm9uZz4hY29ucyE8c3BhbiBjbGFzcz0idGltZXMiPjA8L3NwYW4%2BIXRpbWVzITwvc3Ryb25nPjxicj4KCjxzdHJvbmc%2BIWxhc3QhOiA8c3BhbiBjbGFzcz0idGltZXMiPjIwMTUtMDktMDkgMTk6MDI6NTc8L3NwYW4%2BPC9zdHJvbmc%2BCjwvZGl2Pgo%3D;r6pb_69df_dsu_amuppered=893548;r6pb_69df_forum_lastvisit=D_112_1436441850D_30_1438403529D_19_1438487407D_84_1439554811D_86_1439554818D_85_1439554857D_200_1440859111D_65_1441534722;r6pb_69df_lastact=1441796618%09home.php%09spacecp;r6pb_69df_lastvisit=1441531092;r6pb_69df_nofavfid=1;r6pb_69df_pc_size_c=0;r6pb_69df_saltkey=ofY0D2LY;r6pb_69df_sendmail=1;r6pb_69df_sid=my3NQ0;r6pb_69df_smile=1D1;r6pb_69df_stats_qc_login=3;r6pb_69df_ulastactivity=16d8jgmOBmfx7ytZzJQsz5Qvo7iz6%2BC5f1o%2BKUvQDKr0%2BjcnGzB9;r6pb_69df_visitedfid=65D200D74D1D215D15D7D52;AJSTAT_ok_pages=6;AJSTAT_ok_times=97;domain-filter-bypass=lol;';
	$kafanReferer = 'http://bbs.kafan.cn/';
	$kafanPost = new HttpUtil(1);
	$kafanPost->setCookie($kafanCookie);
	$kafanPost->setUrl($kafanUrl);
	$kafanPost->setReferer($kafanReferer);
	$kafanPost->run();
?>
