<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>冷空气新闻-D丶L气象资料站</title>

<?php
header("Content-type: text/html; charset=utf-8"); 
$url = 'http://news.baidu.com/ns?word=冷空气&tn=newstitle&from=news&rn=100&ct=0';  //这儿填页面地址
$info=file_get_contents($url);
preg_match('|<div id="content_left"><div id="bdRankTips"><div id="bdRankTipsContent">(.*?)<div id="gotoPage">|s',$info,$a);
$a = str_replace("/ns?", 'http://news.baidu.com/ns?', $a);
$a = str_replace("<a href=", '<a target="_blank" href=', $a);
echo '<style >body{color:#000;background:#fff;padding:0;margin:0;position:relative}body,th,td,.p1,.p2{font-family:arial}p,form,ol,ul,li,dl,dt,dd,h3{margin:0;padding:0;list-style:none}input{padding-top:0;padding-bottom:0;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}table,img{border:0}td{font-size:9pt;line-height:18px}em{font-style:normal;color:#c60a00}a em{text-decoration:underline}cite{font-style:normal;color:#008000}.g,a.g{color:#008000}.c{color:#77c}.f14{font-size:14px}.f10{font-size:10.5pt}.f16{font-size:16px}.f13{font-size:13px}#u,#head,#tool,#search,#foot{font-size:12px}.p1{line-height:120%;margin-left:-12pt}.p2{width:100%;line-height:120%;margin-left:-12pt}#wrapper{_zoom:1;min-width:1000px}#content_left{width:540px;padding-left:138px;padding-top:5px;float:left}#content_right{border-left:1px solid #e1e1e1;float:right;padding-left:17px}#u{color:#999;white-space:nowrap;position:absolute;right:0;top:0;margin:25px 9px 5px 0;z-index:301}#u a{color:#333;margin:0 7px}#u .reg{margin:0}#u .last{margin-right:0}#u .un{font-weight:bold;padding-right:11px;margin-right:5px;background:url("http://s1.bdstatic.com/r/www/cache/news/static/global/img/bg_0b634cb1.png") no-repeat right -195px}#u ul{width:100%;background:#fff;border:1px solid #9b9b9b}#u li{height:25px}#u li a{width:100%;height:25px;line-height:25px;display:block;text-align:left;text-decoration:none;text-indent:6px;margin:0;filter:none\9}#u li a:hover{background:#ebebeb}#u li.nl{border-top:1px solid#ebebeb}#header_top_bar{padding-left:138px;margin:12px 0 20px;font-size:12px;color:#666}#header_top_bar .nums{color:#999;display:inline-block;width:299px}.search_type{display:inline}.search_type label{margin-right:10px}.search_type input{vertical-align:text-bottom;margin-right:3px}.search_sort{display:inline;cursor:pointer;margin-left:10px}#userMenu{width:64px;position:absolute;right:7px;_right:2px;top:15px;top:14px\9;*top:15px;padding-top:4px;display:none;*background:#fff}#user{position:relative;display:inline-block}#head{padding:0;margin:0;width:100%;position:absolute;z-index:301;min-width:1000px;background:#fff;border-bottom:1px solid #ebebeb;position:fixed;_position:absolute}#head .head_wrapper{_width:1000px}#head.s_down{box-shadow:0 0 5px #888}#s_tab{background:#f8f8f8;line-height:36px;height:38px;padding:63px 0 0 138px;float:none;zoom:1}#s_tab a,#s_tab b{width:54px;display:inline-block;text-decoration:none;text-align:center;color:#666;font-size:14px}#s_tab b{border-bottom:2px solid #38f;font-weight:bold;color:#323232}#s_tab a:hover{color:#323232}.s_form:after,.s_tab:after{content:".";display:block;height:0;clear:both;visibility:hidden}.s_form{zoom:1;height:63px;padding:0 0 0 10px}.fm{clear:none;float:left;margin:15px 0 0 12px}.nv a,.nv b,.btn,#page,#more{font-size:14px}.s_logo{margin:11px 6px 0 6px;float:left}.s_logo img{border:0;display:block}#mCon{top:5px}.s_ipt_wr.bg,.s_btn_wr.bg,#su.bg{background-image:none}.s_btn_wr{width:auto;height:auto;border-bottom:1px solid transparent;*border-bottom:0}.s_btn{width:100px;height:34px;color:white;letter-spacing:1px;background:#3385ff;border-bottom:1px solid #2d78f4;outline:medium;*border-bottom:0;-webkit-appearance:none;-webkit-border-radius:0;border:0;font-size:14px;cursor:pointer}.s_btn:hover,.s_btn.btnhover{background:#317ef3;border-bottom:1px solid #2868c8;*border-bottom:0;box-shadow:1px 1px 1px #ccc}.s_btn_h{background:#3075dc;box-shadow:inset 1px 1px 3px #2964bb;-webkit-box-shadow:inset 1px 1px 3px #2964bb;-moz-box-shadow:inset 1px 1px 3px #2964bb;-o-box-shadow:inset 1px 1px 3px #2964bb}#head .bdsug{top:48px}.bdsug{position:absolute;background:#fff;display:none;border:1px solid #ccc;width:538px;box-shadow:1px 1px 3px #ededed;-webkit-box-shadow:1px 1px 3px #ededed;-moz-box-shadow:1px 1px 3px #ededed;-o-box-shadow:1px 1px 3px #ededed}.bdsug.bdsugbg{background-repeat:no-repeat;background-position:100% 100%;background-size:100px 110px;background-image:url(http://s1.bdstatic.com/r/www/cache/news/static/home/img/sugbg_6a9201c2.png);background-image:url(http://s1.bdstatic.com/r/www/cache/news/static/home/img/sugbg_d24a0811.gif)\9}.bdsug li{width:522px;line-height:22px;color:#000;font:14px arial;padding:3px 8px;position:relative;cursor:default}.bdsug li.bdsug-s{background:#f0f0f0}.bdsug-ala h3{margin:8px 0 5px 0}.bdsug-store span,.bdsug-store b{color:#7a77c8}.bdsug-store-del{font-size:12px;color:#666;text-decoration:underline;position:absolute;right:8px;top:4px;cursor:pointer;display:none}.bdsug-s .bdsug-store-del{display:inline-block}.s_ipt_wr{border:1px solid #b6b6b6;border-color:#7b7b7b #b6b6b6 #b6b6b6 #7b7b7b;background:#fff;display:inline-block;vertical-align:top;width:539px;height:32px;margin-right:0;border-right-width:0;border-color:#b8b8b8 transparent #ccc #b8b8b8}.wrapper_s .s_ipt_wr{width:439px}.wrapper_s .s_ipt{width:434px}.wrapper_s #u .toindex{display:none}.wrapper_s .baidunewsapp{display:none}#wrapper_wrapper .container_l .EC_ppim_top,#wrapper_wrapper .container_xl .EC_ppim_top{width:640px}#wrapper_wrapper .container_s .EC_ppim_top{width:570px}.container_l #content_right{width:384px}.container_s{width:1002px}.container_l{width:1222px}.container_xl #content_right{width:384px}.container_xl{width:1257px}.s_ipt_wr:hover,.s_ipt_wr.ipthover{border-color:#999 transparent #b3b3b3 #999}.s_ipt_wr.iptfocus{border-color:#4791ff transparent #4791ff #4791ff}.s_ipt_tip{color:#aaa;position:absolute}.s_ipt{width:526px;height:22px;font:16px/22px arial;margin:6px 0 0 7px;padding:0;background:transparent;border:0;outline:0;-webkit-appearance:none}.sethf{padding:0;margin:0;font-size:14px}.set_h{display:none;behavior:url(#default#homepage)}.set_f{display:none}#tb_mr{color:#00c;cursor:pointer;position:relative;z-index:298}#tb_mr b{font-weight:normal;text-decoration:underline}#tb_mr small{font-size:11px}#help{background:#f5f6f5;zoom:1;padding:0 0 0 50px;float:right}#help a{color:#777;padding:0 15px;text-decoration:none}#help a:hover{color:#333}#foot{background:#f5f6f5;border-top:1px solid #ebebeb;text-align:left;height:42px;line-height:42px;clear:both}#foot .foot_c{float:left;padding:0 0 0 138px}#foot span{color:#666}#page{padding:0 0 0 138px;margin:30px 0 20px 0;font:14px arial;white-space:nowrap}#page a,#page strong{display:inline-block;vertical-align:text-bottom;height:66px;text-align:center;line-height:34px;text-decoration:none;overflow:hidden;margin-right:9px;background:white}#page a{cursor:pointer}#page a:hover{background:0}#page .n:hover,#page a:hover .pc{background:#f2f8ff;border:1px solid #38f}#page .n{height:34px;padding:0 18px;border:1px solid #e1e2e3}#page span{display:block}#page .pc{width:34px;height:34px;border:1px solid #e1e2e3;cursor:pointer}#page .fk{width:24px;height:24px;margin-bottom:6px;margin-left:6px;cursor:pointer}#page strong .fk,#page strong .pc{cursor:auto}#page .fk .c-icon-bear-pn{top:-3px;position:relative}#page .fkd .c-icon-bear-pn{top:3px;position:relative}#page .fk_cur .c-icon-bear-p{top:-2px;position:relative}#page strong .pc{border:0;width:36px;height:36px;line-height:36px}#rs{padding:0;margin:6px 0 0 138px;width:600px}#rs th{width:175px;line-height:22px;font-size:14px;font-weight:normal;white-space:nowrap;text-align:left;vertical-align:top}#rs .tt{padding:0;line-height:30px;font-weight:bold}#rs td{width:5px}#rs table{width:540px}#rs_top{font-size:14px;margin-bottom:22px}#rs_top a{margin-right:18px}#search{padding:18px 0 16px 20px}#search .s_help{position:relative;top:10px}.h{margin-left:8px;width:100%}.r{word-break:break-all;cursor:hand;width:238px}.pl{padding-left:3px;height:8px;padding-right:2px;font-size:14px}.mo,a.mo:link,a.mo:visited{color:#666;font-size:100%;line-height:10px}.htb{margin-bottom:5px}a font[size="3"] font,font[size="3"] a font{text-decoration:underline}div.blog,div.bbs{color:#707070;padding-top:2px;font-size:13px}.result{width:540px;word-break:break-all;word-wrap:break-word}.result-op .f{word-wrap:normal}.tools{width:230px;margin:25px 0 0 20px;display:inline-block;white-space:nowrap;position:absolute;top:0;left:778px}.tools a{color:#333}#mHolder{width:62px;position:relative;z-index:296;top:-18px;margin-left:9px;margin-right:-12px;display:none}#mCon{height:18px;position:absolute;right:7px;top:3px;top:6px\9;cursor:pointer;padding:0 18px 0 0;line-height:18px;background:url(http://s1.bdstatic.com/r/www/cache/news/static/global/img/bg_0b634cb1.png) no-repeat right -133px;background-position:right -135px\9}#mCon span{color:#00c;cursor:default;display:block}#mCon .hw{text-decoration:underline;cursor:pointer}#mMenu{width:56px;border:1px solid #9b9b9b;position:absolute;right:7px;top:23px;display:none;background:#fff}#mMenu a{width:100%;height:100%;color:#00c;display:block;line-height:22px;text-indent:6px;text-decoration:none;filter:none\9}#mMenu a:hover{background:#ebebeb}#mMenu .ln{height:1px;background:#ebebeb;overflow:hidden;font-size:1px;line-height:1px;margin-top:-1px}.EC_mr15{margin-left:0}.pd15{padding-left:0}.map_1{width:30em;font-size:80%;line-height:145%}.map_2{width:25em;font-size:80%;line-height:145%}.favurl{background-repeat:no-repeat;background-position:0 1px;padding-left:20px}#more,#u ul,#mMenu,.msg_holder{box-shadow:1px 1px 2px #ccc;-moz-box-shadow:1px 1px 2px #ccc;-webkit-box-shadow:1px 1px 2px #ccc;filter:progid:DXImageTransform.Microsoft.Shadow(Strength=2,Direction=135,Color="#cccccc")\9}.c-title{font-weight:bold;font-size:14px;line-height:1.54}.c-title a:link{color:#00c}.c-title a:visited{color:#810081}.c-author,.c-title-author{color:#666;font-size:13px}.c-title-author{padding-left:5px;display:block;line-height:1.52em;margin-bottom:4px}.c-summary{font-size:13px;line-height:1.54em;color:#333;overflow:hidden;zoom:1}.c-cache{color:#666;font-size:13px;white-space:nowrap}.c-lightblue{color:#77C}.c-clearfix:after{content:".";display:block;height:0;clear:both;visibility:hidden}.c-clearfix{zoom:1}.c-wrap{word-break:break-all;word-wrap:break-word}.c-more_link{color:#7a77c8;font-size:13px;white-space:nowrap}.c_photo,.c_video{display:block;position:relative}.c_video span{position:absolute;bottom:0;left:0;width:100%;height:20px;background:#000;filter:alpha(opacity=65);opacity:.65}.c_video b{position:absolute;bottom:3px;left:4px;width:14px;height:14px;overflow:hidden;background:url(http://s1.bdstatic.com/r/www/cache/news/static/global/img/play_436a31c6.gif)}.hint_top{margin-bottom:14px;font-weight:bold;font-size:13px;line-height:1.54;word-wrap:break-word;word-break:break-all}.hint_top a:link{color:#00c}.hint_top a:visited{color:#810081}.hint_right_top{margin-bottom:30px;font-size:14px}#con-at{margin-bottom:15px}#con-ar{margin-bottom:40px}#con-at .result-op{margin-bottom:15px;font-size:13px;line-height:1.52em}#con-ar .result-op{margin-bottom:28px;font-size:13px;line-height:1.52em}#content_left .result-op,#content_left .result{margin-bottom:15px}#content_left .title{margin-bottom:0;line-height:1.5em;width:auto}.title .c-title{float:none;display:inline;font-weight:normal}.title .c-author{float:none}#content_left .titlelast{margin-bottom:26px}#noresult{font-size:14px;line-height:20px}#noresult a{text-decoration:none}#noresult p{margin-bottom:25px}#noresult li{list-style:disc inside;margin:15px 12px}#bdRankTips{padding-left:13px;margin-bottom:10px;font-size:13px;color:#7e4a17;height:33px;line-height:33px;border:1px solid #fed4a8;background-color:#fff9e3;position:relative;display:none}#bdRankTips a{margin-left:28px}#bdRankTipsClose{font-size:14px;color:#db9146;text-decoration:none;font-weight:bold;position:absolute;top:-7px;right:5px}#bdRankTips.bdRankTipsOk{color:#487405;border:1px solid #c6f389;background-color:#f3fce7}.bdRankTipsOk #bdRankTipsClose{color:#9cb673}#noMoretips{position:absolute;top:1px;*top:0;_top:5px;right:37px}#gotoPage{clear:both;margin:0 0 24px 138px}#gotoPS{clear:both;text-decoration:none}.PS-word{color:#c00}#ecomAdDiv_1,#ecomAdDiv_2{margin-bottom:10px}#ecomAdDiv_3{width:640px;margin:0 0 20px 138px}.bySametip{display:block;font-size:14px;line-height:24px;font-style:italic;color:#000;margin:24px 0}.c-tip-icon i{display:inline-block;cursor:pointer}.c-tip-con{position:absolute;z-index:1;top:22px;left:-35px;background:#fff;border:1px solid #dcdcdc;border:1px solid rgba(0,0,0,0.2);-webkit-transition:opacity .218s;transition:opacity .218s;-webkit-box-shadow:0 2px 4px rgba(0,0,0,0.2);box-shadow:0 2px 4px rgba(0,0,0,0.2);padding:5px 0 5px 0;display:none;font-size:12px;line-height:20px}.c-tip-arrow{width:0;height:0;font-size:0;line-height:0;display:block;position:absolute;top:-16px}.c-tip-arrow-down{top:auto;bottom:0}.c-tip-arrow em,.c-tip-arrow ins{width:0;height:0;font-size:0;line-height:0;display:block;position:absolute;border:8px solid transparent;border-style:dashed dashed solid dashed}.c-tip-arrow em{border-bottom-color:#d8d8d8}.c-tip-arrow ins{border-bottom-color:#fff;top:2px}.c-tip-arrow-down em,.c-tip-arrow-down ins{border-style:solid dashed dashed dashed;border-color:transparent}.c-tip-arrow-down em{border-top-color:#d8d8d8}.c-tip-arrow-down ins{border-top-color:#fff;top:-2px}.c-tip-con h3{font-size:12px}.c-tip-con .c-tip-title{margin:0 10px;display:inline-block;width:239px}.c-tip-con .c-tip-info{color:#666;margin:0 10px 1px 10px;width:239px}.c-tip-con .c-tip-cer{width:354px;color:#666;margin:0 10px 1px 10px}.c-tip-con .c-tip-title{width:auto;_width:354px}.c-tip-con .c-tip-item-i{padding:3px 0 3px 20px;line-height:14px}.c-tip-con .c-tip-item-i .c-tip-item-icon{margin-left:-20px}.c-tip-con .c-tip-menu ul{width:95px}.c-tip-con .c-tip-menu-set ul{width:85px}.c-tip-con .c-tip-menu ul{text-align:center}.c-tip-con .c-tip-menu li a{display:block;text-decoration:none;cursor:pointer;background-color:#fff;padding:3px 0;color:#666}.c-tip-con .c-tip-menu li a:hover{display:block;background-color:#ebebeb;color:#333}.c-tip-con .c-tip-login-menu ul{width:70px}.c-tip-con .c-tip-login-menu ul{text-align:center}.c-tip-con .c-tip-login-menu li a{display:block;text-decoration:none;cursor:pointer;background-color:#fff;padding:3px 0;color:#333}.c-tip-con .c-tip-login-menu li a:hover{display:block;background-color:#38f;color:#fff}.c-tip-con .c-tip-notice{width:239px;padding:0 10px}.c-tip-con .c-tip-notice .c-tip-notice-succ{color:#4cbd37}.c-tip-con .c-tip-notice .c-tip-notice-fail{color:#f13f40}.c-tip-con .c-tip-notice .c-tip-item-succ{color:#444}.c-tip-con .c-tip-notice .c-tip-item-fail{color:#aaa}.c-tip-con .c-tip-notice .c-tip-item-fail a{color:#aaa}.c-tip-close{right:10px;position:absolute;cursor:pointer}#prefpanel{background:#fafafa;display:none;opacity:0;position:fixed;_position:absolute;top:-359px;z-index:500;width:100%;min-width:960px;height:359px;border-bottom:1px solid #ebebeb}#prefpanel form{_width:850px}.briiconsbg{background-repeat:no-repeat;background-size:300px 18px;background-image:url(http://s1.bdstatic.com/r/www/cache/news/static/home/img/icons_c3b33b92.png);background-image:url(http://s1.bdstatic.com/r/www/cache/news/static/home/img/icons_0a1fc6ac.gif)\9}</style>';
echo $a[1];

?>
