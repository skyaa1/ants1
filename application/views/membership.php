

  <div class="modal" >
    <form action="/index.php/auth/membership" class="form-horizontal" method="post">
    <div class="modal-header">

      <h3 style="color:blue;">회원가입</h3>

    </div>
    <div class="modal-body">
        <div class="control-group">
          <label class="control-label" style="color:blue;" for="inputEmail">이메일</label>
          <div class="controls" >
           <input type="email" id="inputEmail" name="email" style="width:auto;" value="<?php
              if($this->input->post('email') == true){
              echo ($email);
             }
              ?>" placeholder="E-mail">
           <input type="submit" name="name" class="btn btn-primary" value="이메일 확인">
          </div>
</div>
<div class="control-group">
  <label class="control-label" style="color:blue;" for="inputPassword">패스워드</label>
  <div class="controls">
    <input type="password" id="inputPassword" name="password" style="width:auto;" placeholder="Password">
  </div>
</div>
 <div class="control-group">
   <label class="control-label" style="color:blue;" for="inputPassword">패스워드 확인</label>
   <div class="controls">
     <input type="password" id="inputPassword" name="password1" style="width:auto;" placeholder="Password">
   </div>
 </div>



    </div>
     <div class="modal-footer">
        <input type="submit" class="btn btn-primary"  value="회원가입">

     </div>
   </form>
  </div>
