<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include('conn.php');
$sth = mysqli_query($con, "SELECT * FROM dus ORDER BY createdat DESC ");
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> IOT Based Smart Bin</title>

<meta http-equiv="refresh" content="60" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<table style="width:100%" border="1">
<tr>
<td colspan="5" valign="middle" width="100%" align="center">
<h3>  IOT Based Smart Bin  </h3>
</td>
</tr>
</table>
</div>
<div class="row" style="margin-top: 20px">
<div class="col-md-6">
<span class="label label-danger">Login</span>
<div id="" class="motor-holder">
<form action="" method="post">
<div class="form-group">
<label for="email">User Id:</label>
<input type="text" class="form-control" id="user" name="user" required>
</div>
<div class="form-group">
<label for="pwd">Password:</label>
<input type="password" class="form-control" id="pwd" name="pwd" required>
</div>
<button type="submit" id="submito" name="submito"  class="btn btn-default">Submit</button>
<button type="reset"    class="btn btn-default">Clear</button>
</form>

<?php
if(isset($_POST['submito']))
{
if($_REQUEST['user'] == "dust" && $_REQUEST['pwd'] == "dust1234")
{
$_SESSION['user'] = array("username" => "dust", "password" => "dust1234");
echo "<meta http-equiv='refresh' content='0;url=index.php' />";
}
else
{
echo "<div style='color:red; font-weight:bold;'>Please enter valid login details /   </div";
echo "<div style='color:red; font-weight:bold;'>User Id & Password is wrong  </div";
}
}
?>       
</div>
</div>
</div>
</div>   
</body>
</html>