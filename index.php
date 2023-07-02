
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
// Normal Using Core PHP 
if(!empty($_POST))
{
  $Username=$_POST['Username'];
  $gitPassword=$_POST['gitPassword'];
  $repository_url=$_POST['repository_url'];
  $Issue_title=$_POST['Issue_title'];
  $Issue_description=$_POST['Issue_description'];
  // Required All fields
  if(!empty($Username) && !empty($gitPassword) && !empty($repository_url) && !empty($Issue_title) && !empty($Issue_description))
  {
    $gitrep= 'git clone https://'.$Username.':'.$gitPassword.'@github.com:'.$Username.'.com/test.git';
    $output = shell_exec ($gitrep);
    // Add Issue to git hub
    shell_exec ('gh issue create --title "'.$Issue_title.' " --body "'.$Issue_description.'"');
  }

}
//print_r($_POST);

?>


<div class="container">
  <h2>GitHub Add Issue Test</h2>
  <form action="" method="post">
    <div class="form-group">
      <label for="email">User Name:</label>
      <input type="text" class="form-control" id="Username" placeholder="Enter Username" name="Username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="gitPassword">
    </div>
    <div class="form-group">
      <label for="repository_url">Repository url:</label>
      <input type="text" class="form-control" id="repository_url" placeholder="Enter repository url" name="repository_url">
    </div>
    <div class="form-group">
      <label for="Issue_title">Issue title:</label>
      <input type="text" class="form-control" id="Issue_title" placeholder="Enter Issue title" name="Issue_title">
    </div>
    <div class="form-group">
      <label for="Issue_description">Issue description:</label>
      <input type="text" class="form-control" id="Issue_description" placeholder="Enter Issue description" name="Issue_description">
    </div>
    <button type="submit" name="submit" value="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>



<?php



// $output = shell_exec ("git clone https://prabhatyadavjss@gmail.com:Prabhat@1020d@github.com:prabhatyadavjss@gmail.com/test.git");

// shell_exec ('gh issue create --title "My new issue 3 " --body "Here are more details. 33"');

?>