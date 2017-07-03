
<?php 

//require_once ('dbconfig.php');

?>
<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div class="container">

    <form class="well form-horizontal"  method="post" action="db.php"  id="contact_form" required>
<fieldset>
<div class="row">
<div class="col-md-offset-4 col-md-4">
FirstName:<input type="text" class="form-control" name="first_name" id="first_name" required/>
</div>

<br/>
<div class="col-md-offset-4 col-md-4">
LastName:<input type="text"  class="form-control"name="last_name" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
Email:<input type="email"  class="form-control"name="email" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
Phone:<input type="text" class="form-control" name="phone" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
Address:<input type="text" class="form-control" name="address" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
City:<input type="text" class="form-control" name="city" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
State:<input type="text" class="form-control" name="state" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
Zip:<input type="text" class="form-control" name="zip" id="" required/>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
Remarks:
<textarea type="text" class="textarea form-control" rows="3" name="remarks"></textarea>
</div>
</div>
<div class="row">
<div class="col-md-offset-4 col-md-4">
FIle:
<input type="file" class="textarea form-control" rows="3" name="file">
</div>
</div>
</br>
<div class="form-group">
  <label class="col-md-5 control-label"></label>
  <div class="col-md-5">
    <button type="submit" class="btn btn-warning" onclick="save();" >Send</button>
  </div>
</div>

</fieldset>
</form>
</div>


    </div><!-- /.container -->
	
	
	
	
