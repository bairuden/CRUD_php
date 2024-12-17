<?php
$conn = mysqli_connect('localhost', 'root', '', 'a_phptute');
if($_GET['deleteid']){
    $deleteid = $_GET['deleteid'];
    $sql = "DELETE FROM students WHERE id =$deleteid";
    if($query = mysqli_query($conn,$sql)==TRUE){
header('location:view.php');
    }
}

?>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-10 pt-4 mt-4 border border-success">
            <h3 class="text-center p-2 m-2 bg-success text-white " >Users Information</h3>
            <?php
            $sql = "SELECT*FROM students";
            $query = mysqli_query($conn, $sql);
            echo "<table class ='table table-success'>
            <tr><th>id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Action</th>
            </tr>
            ";
            while ($data = mysqli_fetch_assoc($query)) {
                $id = $data['id'];
                $firstname = $data['firstname'];
                $lastname = $data['lastname'];
                $email = $data['email'];
                
                echo "<tr><td>$id</td>
                    <td>$firstname</td>
                    <td>$lastname</td>
                        <td>$email</td>
                        <td>
                        <span class='btn btn-success'>
                        <a href = 'edit.php?id=$id class=text-white text-decoration-none'>
                        Edit
                        </a>
                          </span>
                        
                        <span class='btn btn-danger'>
                        <a href='view.php?deleteid=$id class=text-white text-decoration-none'>
                        Delete
                        </span>
                         
                        </td>
                </tr>";
                 $id . '' . $firstname . '' . $lastname . '' . $email;
            }
            ?>
            <div class="col-sm-1">
            </div>
        </div>
    </div>
</body>

</html>