<?php
//header('Content-type: Application/x-mpegURL'); 
header('Content-type: text/plain'); 

if($id = $_GET["chid"]){$bawu = burketz("$id");} 

header("Location:$bawu");
function burketz($id){   
   $apilink = "https://www.vidio.com/live/$id/tokens";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL,$apilink);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_POSTFIELDS, "");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   $headers = array();

$headers[] = 'Cookie:ahoy_visitor=e3e70670-b54a-4528-b2de-05d6c3581202; _tt_enable_cookie=1; _ttp=45a216aa-dd03-4d4b-b29a-8044a7c68b17; _CEFT=Q===; _cc_id=99cb69153efb346e9d72e58ff09335d1; sp=2dfb26a2-6d4a-47f4-89cb-ad9380a02323; __gads=ID=8ceacd856ea91097:T=1653141017:S=ALNI_Ma1Ip_zl0Kl-i7KBWUJF79LCy9WjQ; cto_bundle=if66m18lMkJ0Q3ZUemNwJTJGUjJXcmN0eTMwUFZ1Q2k5ek95dDhjd2doZ0clMkZ1eUxFcG5SRlpoV3JVbHpRMmRPeUx5VGNBVU9yNEt0S3BxSDhqVmg5WHJHRHU2JTJCRzJFUmtxYzklMkYxTFh4TUJKZ3FDVzNYUzV3Qm9HRWV4eUltcE10V01pJTJGZHNFWUhEM04ydlpta0lxYTRGYkw4UlNpcHclM0QlM0Q; __gpi=UID=0000059f24ceedc4:T=1653141014:RT=1658155126:S=ALNI_MYfXnuVz68YNN-MMy-9fdLgQ_HGmA; ___iat_vis=3D65A5D37FB8C955.f47221398b3c482ee9c8c3159597b1a8.1661764381677.458136aa29748b5c1c5d0c83e562b4ee.ZIBZABUIBM.11111111.1.0; _ga_5VLBC3M1F3=GS1.1.1662980857.4.0.1662980879.0.0.0; _ga_JBTBSESXVN=GS1.1.1663084286.41.0.1663084286.60.0.0; _clck=e3war2|1|f4u|0; _ce.s=v~0c6834ff97c52f06fbf0f55f3b77072fe2ae13f8~vpv~39~v11.rlc~1663084293786~v11slnt~1660832962687; _sp_id.5952=5d7f5cd8-5432-490f-9b4d-a57bcd34df4c.1652819813.40.1663084297.1662984849.c9ce3e49-c5d2-4791-8845-7b5815c145d9; _ga=GA1.2.182309111.1652819807; g_state={"i_l":2,"i_p":1675318001110}; _gid=GA1.2.980219605.1675525563; ahoy_visit=3403b989-5d1e-4a09-be78-39354d89b935; shva=1; remember_user_token=eyJfcmFpbHMiOnsibWVzc2FnZSI6Ilcxc3hNRFF4TVRJd05ETmRMQ0lrTW1Fa01UQWtWRWxqWm5NdmRVbFhaa1ZYWjBOVlVIRnRSa1J2WlNJc0lqRTJOelUxTmpnNE5qWXVNamcxTXpneU55SmQiLCJleHAiOiIyMDI1LTAyLTA1VDAzOjQ3OjQ2LjI4NVoiLCJwdXIiOiJjb29raWUucmVtZW1iZXJfdXNlcl90b2tlbiJ9fQ==--ff7b775e610817962a163c5b2fec27ec252915d8; _vidio=true; plenty_id=104112043; access_token=eyJhbGciOiJIUzI1NiJ9.eyJkYXRhIjp7InR5cGUiOiJhY2Nlc3NfdG9rZW4iLCJ1aWQiOjEwNDExMjA0M30sImV4cCI6MTY3NTY1NTI3MX0.lBjwBNpuxB0QdIogV97WLBUBtDrtpZyaD32LfR90M1o; luws=6c5f341cb9e61acff2568713_104112043; _vidio_session=MFhzTFBwSUo4Mm0vNklRODF5OTFLTzRSbEhoYUgrM3JwT0RxeXJLUGJtQnFYd3E2enpjcFBycVM3S3ZFOGVENEU5QlJpUnhqbTZ6eXM2eG9jYWsrTWRmeEtuNEpKcUNHVVRXcTdQT0YxU2lyMTFOTTV2SE5hYkExZ3B6Tk55ZFJLbGcwOFdqSi9aUTZ4MW9meGVJMldWYjV3TWExM3N0d3hpNnRPWGJlTDF5dmdLRjZqdU9QSTE3R3diOTJWRkI5ai94OVFMK2lOT2lXY1l2a1RsRmtnSXROVDNXUzdDbjZORyswRE1QbVFYc1Y3UFRNYk5TekFZTENjTHlTWjA4QzQvTlkreE13RnBHYkpuRmd2Tjg5M0xWY2FnaHVONVlVQ1phK1M1Z3VJNUZ6bE5zQUlOaFArU2kwSkROTlRHZTgzWkRRWTVTdkVsUVJMOGI3TElSSndXSXpxY090MjRnWnZvT0hEaW4rRUdWMWs1Sko0VGc4VTJJdDM0WEZaNThvS2dvRVdsMGVHUUMzTEdGTEZHZWpxYVZqbzVsQ0VhZUkyMFNiUmFMT3NTV04zWXdlSWxsL0EvN0owekF0RU9wdFV5M2JtTkl3OE0zWkVYdTNBQlpQUFE9PS0teFRFNzN0b0MvYlEwaXJvMVJtcEVTZz09--d3474954e557905cf9817b04edb8c32e42b13350'; 

   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $server_output = json_decode(curl_exec($ch),true);
   curl_close ($ch);
   $url = "https://app-etslive-2.vidio.com/live/$id/master.m3u8?".$server_output['token'];

$c = str_replace("trace_id","4rr0w_bl4ck==",$url);

$w = substr($c, 0, -53);
//print_r($url);
//return ($url);
//print_r($server_output['token']);
//return $w; 
print_r($server_output);

}
