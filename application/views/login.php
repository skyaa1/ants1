

  <div class="modal" >
    <form action="/index.php/auth/authentication" class="form-horizontal" method="post">
    <div class="modal-header">

      <h3 style="color:blue;">로그인</h3>

    </div>
    <div class="modal-body">
        <div class="control-group">
  <label class="control-label" style="color:blue;" for="inputEmail">아이디</label>
  <div class="controls" >
    <input type="text" id="inputEmail" name="id" style="width:auto;" placeholder="Id">
  </div>
</div>
<div class="control-group">
  <label class="control-label" style="color:blue;" for="inputPassword">패스워드</label>
  <div class="controls">
    <input type="password" id="inputPassword" name="password" style="width:auto;" placeholder="Password">
  </div>
</div>



    </div>
     <div class="modal-footer">
        <input type="submit" class="btn btn-primary"  value="로그인">
     </div>
   </form>
  </div>
