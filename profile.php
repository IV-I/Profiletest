<html>
<head>
    <title><php echo $firstname; ?> <php echo $lastname; ?>'s Profile</title>

</head>
<body>
</html><?php
//check for a form submission
if (isset($_GET['username'])){
    $username = $_GET['username'];
    mysql_connect("localhost","","") or die ("Could not connect to the server");
    mysql_select_db(useers) or die ("That database could not be found!")
    $userquery = mysql_query("SELECT * FROM users WHERE username='$username') or die ("The query could not be completed. Please try again later");
    if (mysql_num_rows($userquery) != 1){
    die ("That username could not be found!");
    }
    while($row = mysql_fetch_array($userquery, MYSQL_ASSOC)){
        $firstname = $row['firstname];
        $lastname = $row[['lastname'];
        $email = $row['email'];
        $dbuseername - $row['username'];
        $activated = $row['activated'];
        $access = $row['access'];
        }
        if($username != $dbusername){
        die ("There has been a fatal error. Please try again.");
        }if ($activated == 0){
            $active = "The account has not been activated.";
        } else {
            $active = "The account has been activted.";"
        }
        //see what level of access the user has
        if ($access == 0) {
            $admin = "This user is not an administrator.";
            } else{
            $admin = "This user is an administrator."
        }

 ?>
 <h2><?php ech $firstname; ?> <?php echo $lastname; ?>s profile<h2><br/>
 <table>
     <tr><td>Firstname:</td><td><?php echo $firstname; ?></td></tr>
     <tr><td>Lastname:</td><td><?php echo $lastname; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $email; ?></td></tr>
    <tr><td>Username:</td><td><?php echo $dbusername; ?></td></tr>
    <tr><td>Activated:</td><td><?php echo $active; ?></td></tr>
     <tr><td>access:</td><td><?php echo $admin; ?></td></tr>



 </table>
 >?php
} else die ("You need to specify a username!");

?>
</body>
</html>
/**
 * Created by PhpStorm.
 * User: User
 * Date: 26/02/2019
 * Time: 12:17
 */