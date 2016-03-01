<html><head><title></title>
	<meta charset="utf-8">
 <style type="text/css">
 <!--
 #con1{font-size:12px; color:blue;}
  #con2{font-size:11px; color:3d698e;}
  #con3{font-size:12px; color:e00000;}
  #con4{font-size:13px; color:4b4b4b;}
 </style>
  <script language=javascript>
   <!--
    function pay() {
    if(document.frm.na.value=="")
   {
    alert("이름을 입력해 주세요.");
    frm.na.focus();
    return;
   }
    else if(document.frm.ph1.value=="")
   {
    alert("휴대폰 번호를 입력해 주세요.");
    frm.ph1.focus();
    return;
   } 
    else if(document.frm.ph2.value=="")
   {
    alert("휴대폰 번호를 입력해 주세요.");
    frm.ph2.focus();
    return;
   }
    else if(document.frm.num1.value=="")
   {
    alert("주소를 입력해 주세요.");
    frm.num1.focus();
    return;
   }
    else if(document.frm.num2.value=="")
   {
    alert("주소를 입력해 주세요.");
    frm.num2.focus();
    return;
   }
    else if(document.frm.n_num.value=="")
   {
    alert("주소를 입력해 주세요.");
    frm.n_num.focus();
    return;
   }

   else if(document.frm.na.value.length=!0,
     document.frm.ph1.value.length=!0,
     document.frm.ph2.value.length=!0,
     document.frm.num1.value.length=!0,
     document.frm.num2.value.length=!0,
     document.frm.n_num.value.length=!0)

  {
      alert("주문해 주셔서 감사 합니다. *^^*");
      document.frm.action="main.html";
   }

}// 자바스크립트 끝 -->
 </script>
 <style>
 <!--
a:link{text-decoration:none;}
 a:visited{text-decoration:none;}
 a:active{text-decoration:none;}
 -->
 </style>

</head>
 <body>
 <form name=frm>
 <table width=990 align="center"  border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td align="right"><a href="#"><img src="btn_cart.gif" border=0></a><a href="#"><img src="btn_order.gif" border=0></a></td>
  </tr>
 </table>
 <table align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td rowspan="7"><img src="manu_1.jpg"></td><td hight="23">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="T-shart.html"><img src="shart_but.jpg" border="0"></a></td>
  </tr>
  <tr>
    <td hight="14">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="Pents.html"><img src="pants_but.jpg" border="0"></a></td>
  </tr>
  <tr>
    <td hight="12">&nbsp;</td>
  </tr>
  <tr>
    <td><a href="ECC.html"><img src="ecc_btn.jpg" border="0"></a></td>
  </tr>
  <tr>
    <td hight="51">&nbsp;</td>
  </tr>
 <table   border="0" cellspacing="2" cellpadding="2">
  <tr>
   <td valign="top" width=200 rowspan="5" align="center"><b ID="con3">주문자 정보</b></td>
   <td width=150>&nbsp;<b ID="con4">이름</b></td>
   <td>: &nbsp;<input type="text" value="윤성준" name="na" style="width:120px;height:20px"><b ID="con2"> 실명으로 입력하세요.</b></td>
  </tr>
  <tr>
   <td width=150>&nbsp;<b ID="con4">휴대폰 번호</b></td>
   <td>: &nbsp;<select>              
                <option>010</option>
                <option>011</option>
                <option>016</option>
                <option>017</option>
                <option>018</option>
                <option>019</option>
               </select> -
               <input type="text" value="9970" name="ph1" style="width:50px;height:20px"> - <input type="text" value="9506" name="ph2" style="width:50px;height:20px"></td>
  </tr>
  <tr>
   <td width=150>&nbsp;<b ID="con4">이메일 주소</b></td>
   <td>: &nbsp;<input type="text" name="em1" value="todwnsdl" style="width:70px;height:20px"> <font size=2>@</font> <input type="text" value="naver.com" name="em2" style="width:100px;height:20px"><br>
              &nbsp;&nbsp; <b ID="con2">주문자의 이메일로 상품주문내역이 발송됩니다.</b></td>
  </tr>
  <tr>
   <td width=150>&nbsp;<b ID="con4">주소</b></td>
   <td>: &nbsp;<input type="text" name="num1" value="411" style="width:40px;height:20px"> - <input type="text" name="num2" value="776" style="width:40px;height:20px"><br>
               &nbsp; &nbsp;<input type="text" name="n_num" value="경기 고양시 일산서구 일산2동 산들마을아파트 503동 501호" style="width:350px;height:20px"><br>
               &nbsp;&nbsp; <b ID="con2">이 주소로 물건이 배송됩니다.</b></td>
  </tr>
 </table>
 <table align="center">
  <tr>
   <td><img src="line.gif">
   </td>
  </tr>
 </table>
 <table border=0 cellspacing="2" cellpadding="2">
  <tr>
    <td valign="top" width=200 rowspan="6" align="center"><b ID="con3">결제 방법</b></td>
    <td valign="top" width=150><input type="radio" checked name="sin"><b ID="con2">신용카드</td>
    <td>: &nbsp; <b>[<b ID="con3">결제금액:83,700 원</b>]</b><br><br>
                 <font size=2>※ 신용카드 정보가 상점에 남지 않으며,<font color="blue"> 128bit SSL</font>로 암호화된 결제창이 새로 뜹니다!<br>
                 ※ 결제후, 카드명세서에 [<font color="red">dacompay.net(데이콤전자상거래)</font>]로 표시됩니다!</font> </td>
  </tr>
  <tr>
  <td>&nbsp</td>
  </tr>
  <tr>
   <td valign="top" width=150><input type="radio" name="sin"><b ID="con2">무통장입금</td></td>
   <td>: &nbsp; <b>[<b ID="con3">결제금액:83,700 원</b>]</b><br><br>
                <b ID="con2">입금 계좌 선택</b> &nbsp : <select>
 <option>농협중앙회 - 601025-56-019825 : 윤성준
<option>우리(한빛)은행 - 1002-438-072823 : 윤성준
<option>국민(주택)은행 - 792001-01-235846 : 윤성준
<option>신한은행 - 140-008-265586 : 윤성준
</select><br><br>
                 <b ID="con2">입금자명</b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp;</b><input type="text" name="inna" style="width:80px;height:20px"><br><br>
                 <font size=2>※ <font color="red">입금자명이 틀릴 경우 입금 승인이 되지 않습니다.</font> <br>
 ※ <font color="red">입금확인후</font>, 안전하고 빠르게 상품을 배송합니다.</font>

               
  </tr>
  <tr>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td valign="top" width=150><input type="radio" name="sin"><b ID="con2">개좌이체</td></td>
   <td>: &nbsp; <b>[<b ID="con3">결제금액:83,700 원</b>]</b><br><br>
                &nbsp;<b ID="con2">주민등록번호</b> &nbsp; &nbsp;:
 <input type="text" name="jumin" style="width:150px;height:20px"><font size=2> &nbsp;※ "-" 없이 입력하세요.</font></td>
  </tr>
  
            
 </table>

<table align="center">
  <tr>
   <td>&nbsp;</td>
  </tr>
  <tr>
   <td><input type="image" value="BT" src="payment_b01.gif" onclick="pay()"> <a href="main.html"><img src="payment_b02.gif" border=0></a></td>
  </tr>
 </form>
 </body>
 </html>
