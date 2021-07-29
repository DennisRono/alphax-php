<?php
echo "<style> table,tr,td{ border-collapse: collapse; border: 1px solid white;} input,textarea{width:100%;} .btn{width:60px;} </style>";

echo '
<table style="background-color: gray; border: 1px solid black !important; width: 500px;">
<form action="B_4.php" method="post">
    <div>
        <h2>Simple Guestbook Application</h2>
    </div>
    
        <tbody>
            <tr>
                <td>
    <label for="name">Name</label>
    </td>
    <td>:</td>
    <td>
    <input type="text" name="u_name"><br>
    </td>
    </tr>
    <tr>
        <td>
    <label for="work">Work</label>
    </td>
    <td>:</td>
    <td>
    <input type="text" name="work"><br>
    </td>
    </tr>
    <tr>
        <td>
    <label for="email">Email Address</label>
    </td>
    <td>:</td>
    <td>
    <input type="email" name="email"><br>
    </td>
    </tr>
    <tr>
        <td>
    <label for="comment">Comment:</label>
    </td>
    <td>:</td>
    <td>
    <textarea name="comment"></textarea><br>
    </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>
    <input class="btn" name="submit" type="submit" value="submit">
    
</form>
<a class="btn" href="B_4.php"><button>Reset</button></a>
</td>
</tr>
</tbody>
</table>
';
if(isset($_POST['submit'])){
    $name = $_POST['u_name'];
    $work = $_POST['work'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    if(empty($name) || empty($work) || empty($email)|| empty($comment)){
        echo '<p style="color: red;">inputs cannot be empty</p>';
    } else {
        $conn = new mysqli("localhost", "root", "", "phpExam");

        if($conn->connect_error){
            die($conn->connect_error);
        }
        $q = "INSERT INTO qFour(Name,Work,Email,Comment)VALUES('$name','$work','$email','$comment')";
        if($conn->query($q)){
            echo '<p style="color: green;">Sucess! details saved</p>';
        }
    }
}

?>
