<?php
include('config.php');
?>
<?php
if(isset($_POST['dnk3'])){
  $query=mysqli_query($conn,"select * from client_gallery where id='".$_POST['dnk3']."'");
  $row=mysqli_fetch_array($query);
  echo ' 
  <div class="row">
  <div class="col-md-12">
    <div class="form-group">
      <label for="date">
       Name  <span class="text-danger">*</span>
      </label>
      <div class="input-group">
      <input type="hidden" name="id" value="'.$row['id'].'">
         
        <input class="form-control" placeholder="name" name="name" type="text" value="'.$row['name'].'" data-dtp="dtp_dl6pL">
        
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group">
  <label for="date">
  Subject <span class="text-danger">*</span>
  </label>
  <div class="input-group">
   
    <textarea class="form-control" placeholder="subject" name="subject">'.$row['subject'].'</textarea>
    
  </div>
</div>
</div>
</div>
 <div class="row">
 <div class="col-md-12">
<div class="form-group">
<label for="clock_in">
Image   <span class="text-danger">*</span>
</label>
<div class="input-group">
<input type="file" class="form-control" value="'.$row['image'].'" name="image" >

</div>
</div>
</div>
 
</div>
';
}


?>