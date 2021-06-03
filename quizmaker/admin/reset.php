<?php 
ob_start();
include("header.php");
if(!isset($_SESSION['id']))
{
  header("Location:../login.php");
}
?>
 <div class="content-wrapper" style="background-color:white;">
<form role="form" id="quickForm" method='post' action="reset1.php">
                <div class="card-body">
                  <div class="form-group">
                  <input type='hidden' name='user' value="<?php echo $_SESSION['id'];?>">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" name="password" required class="form-control" id="txtPassword" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input type="password" name="cpassword" required class="form-control" id="txtConfirmPassword" placeholder="Confirm Password">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name='reset' id="btnSubmit">Update</button>
                </div>
              </form>

<script type="text/javascript">
$(function () {
    $("#btnSubmit").click(function () {
        var password = $("#txtPassword").val();
        var confirmPassword = $("#txtConfirmPassword").val();
        if (password != confirmPassword) {
            alert("Password & Confirm Password do not match.");
            return false;
        }
        return true;
    });
});
</script>

 </div>             