<?php
//header('Content-type: text/plain'); 

function kataAcak(){
    $kataacak = 
[
'ahoy_visitor=e3e70670-b54a-4528-b2de-05d6c3581202; _tt_enable_cookie=1; _ttp=45a216aa-dd03-4d4b-b29a-8044a7c68b17; _CEFT=Q%3D%3D%3D; _cc_id=99cb69153efb346e9d72e58ff09335d1; sp=2dfb26a2-6d4a-47f4-89cb-ad9380a02323; __gads=ID=8ceacd856ea91097:T=1653141017:S=ALNI_Ma1Ip_zl0Kl-i7KBWUJF79LCy9WjQ; cto_bundle=if66m18lMkJ0Q3ZUemNwJTJGUjJXcmN0eTMwUFZ1Q2k5ek95dDhjd2doZ0clMkZ1eUxFcG5SRlpoV3JVbHpRMmRPeUx5VGNBVU9yNEt0S3BxSDhqVmg5WHJHRHU2JTJCRzJFUmtxYzklMkYxTFh4TUJKZ3FDVzNYUzV3Qm9HRWV4eUltcE10V01pJTJGZHNFWUhEM04ydlpta0lxYTRGYkw4UlNpcHclM0QlM0Q; _ga_5VLBC3M1F3=GS1.1.1662980857.4.0.1662980879.0.0.0; _clck=e3war2|1|f4u|0; _sp_id.5952=5d7f5cd8-5432-490f-9b4d-a57bcd34df4c.1652819813.40.1663084297.1662984849.c9ce3e49-c5d2-4791-8845-7b5815c145d9; g_state={\"i_l\":3,\"i_p\":1677947349545}; _gcl_au=1.1.1583534843.1680008825; _fbp=fb.1.1680008826549.1472585182; afUserId=99e752dd-16e6-4d7b-a212-79b49444707a-p; _pbjs_userid_consent_data=3524755945110770; __gpi=UID=0000059f24ceedc4:T=1653141014:RT=1683311270:S=ALNI_MYfXnuVz68YNN-MMy-9fdLgQ_HGmA; _vidio=true; plenty_id=112562809; remember_user_token=eyJfcmFpbHMiOnsibWVzc2FnZSI6Ilcxc3hNVEkxTmpJNE1EbGRMQ0lrTW1Fa01UQWtVamx6Uld4UFVtOU9ZMGRtYW1aR2RWSkpRbm8xWlNJc0lqRTJPRE0zT1RJM09Ua3VOalF4TURVNU9TSmQiLCJleHAiOiIyMDI1LTA1LTExVDA4OjEzOjE5LjY0MVoiLCJwdXIiOiJjb29raWUucmVtZW1iZXJfdXNlcl90b2tlbiJ9fQ%3D%3D--788094c5ab2a573c5fe81bc87c8a4fa69f6c0765; access_token=eyJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7InR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJ1aWQiOjExMjU2MjgwOX0sImV4cCI6MTY4Mzk4MjcyOH0.UxUJTmWR31bROXO3l7pUdzRx2-A8XPYShN43y93Hfnc; meiro_user_id_js=9889512c-64b4-4a1f-8b45-7739ba55e515; ahoy_visit=6f257787-3ad0-45a3-8aef-e4e8a29e15ea; shva=1; user_segments=meiro_all_users_a%2Cmeiro_family_a_quality_watcher%2Cmeiro_fta_quality_watcher%2Cmeiro_kids_content_rating%2Cmeiro_movies_last_ten_play%2Cmeiro_non_family_a_quality_watcher%2Cmeiro_sports_last_ten_play%2Cmeiro_sports_quality_watcher%2Cmeiro_svod_homepage_last7days%2Cmeiro_svod_movies_last_ten_play%2Cmeiro_svod_kids_content_rating%2Cpersonalize_movies_login_watcher%2Csport_watchers; _gid=GA1.2.1417808289.1683946678; cebs=1; __ph_opt_in_out_phc_uFRcpNdtFnJ7R0RW18wXHB2d10Xz69WLYaeJXo9uOBx=0; _ce.clock_event=1; _ce.clock_data=-983%2C36.85.36.77%2C1; _ce.s=v~0c6834ff97c52f06fbf0f55f3b77072fe2ae13f8~vpv~59~v11.rlc~1683946690762~v11slnt~1660832962687~lcw~1683946688606~lcw~1683946690764; visitor_fp_id=9d1368d327d98434df3c8028f65cae71; AF_SYNC=1683946694105; __cf_bm=LWhxX0scPwSmBDLtE_7e98xWM..215ilZRMPPQ9eYPU-1683946699-0-ARbMUIUVaCPT6mvM1+T+s8vSUo/oFUfJqu6rqNyHUbMij5YOH5Hu0cm1Bk43zXlQ72ZyIVV73yubXXSnHlfdtW4=; panoramaId_expiry=1684551505437; panoramaId=362714a91739abb8390e2fa8479d16d53938531a7a8cbeadc101d0b3c5387f73; _dc_gtm_UA-47200845-12=1; cebsp_=3; _ga_JBTBSESXVN=GS1.1.1683946686.73.1.1683946788.42.0.0; _ga=GA1.2.182309111.1652819807; _vidio_session=cU1OQVlLTGVmNjNjb1JlOUJvNE0zNSs4cTEva0c5U3V5T3M1UUVCNzlueWthK1FtTmYxSzlXQXdyOTVGWGdNTm5YSjFILzZWRjBzVnZWYTZ5MmRveVhQSnhnYkZCdkVFL25rQ1pDT1hzTXkrZkFNcVhLdDhyUW93amlEcEFISHNnR1VvaWtTZ3VoYTBsajNNMW1NUWVHVDAxU2dCWXE2MDlGT2xUTnhFWjRVS0pvbDBqdVlwcEFQYmxpU0ZHNmxaaS9PWWNEdksvTWM4TFJyOHBKb1RONFJNK0U1VThyYTVTK3RsS3hLZ3hmQWRKQWhzc0lMN0w1U1RwMzhRUnJzWkFWMHMrU28rRFc1Qm51azRxR2ZMYUN6M1RQRmhrdnZneStyUm1OSlpmelJUcjg2Ymo5NExoWld6b1ZrT1dKUURVS2RaSXJvUy9BMVRLWlkvZk1GaVVhREJWSTZDYjdzVmVYUm52RE9qcEhZMVZvdGhsbXQraGNPdTFrc2VzeUdNaE1neGJzZzdkeGFvNmV2M0VFZVdnWml1aVJtWWIrcHJmdFpIeTRuNnIyUT0tLTdhN3lTbDBNUEIyTlRPdElEVDFqT0E9PQ%3D%3D--091640c027bc0e340dbb910552b4e64d33b8d54b',
];
return $kataacak[mt_rand(0, count($kataacak) - 1)];}
$cc= kataAcak();
//print_r($cc);

$id = $_GET["id"];
   $apilink = "https://www.vidio.com/live/$id/tokens?type=hls";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$apilink);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, "");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $headers = array();

//$headers[] = 'Host:app-etslive-2.vidio.com';
$headers[] = 'Host:www.vidio.com';
$headers[] = 'user-agent:Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.100 Safari/537.36';
$headers[] = 'accept-encoding:identity;q=1, *;q=0';
$headers[] = 'accept:*/*';
$headers[] = 'origin:https://www.vidio.com';
$headers[] = 'x-requested-with:com.netsky.tincat';
$headers[] = 'sec-fetch-site:same-site';
$headers[] = 'sec-fetch-mode:cors';
$headers[] = 'sec-fetch-dest:video';
$headers[] = 'referer:https://www.vidio.com/';
$headers[] = 'accept-language:id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'range:bytes=0-';
$headers[] = 'Cookie:'.$cc;

   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $server_output = json_decode(curl_exec($ch),true);
   curl_close ($ch);
   
print_r($server_output)."\n";

