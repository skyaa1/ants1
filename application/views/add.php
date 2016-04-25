
 <form  action="/index.php/topic/add" method="post" class="span10">

    <?php echo validation_errors(); ?>
    <input class="span12" type="text" name="name" placeholder="제목" >
    <textarea class="span12" name="description" placeholder="내용" rows="8" cols="40"></textarea>
    <input type="submit" class="btn btn-primary"   value="저장">
 </form>
 <script src="/static/lib/ckeditor/ckeditor.js" > </script>
<script>
   CKEDITOR.replace('description',{
    'filebrowserUploadUrl':'/index.php/topic/upload_receive_ck' 
   });
</script>
