<?php   
    require('read.php');
    if(isset($_POST['btnEdit'])){
        $editID = $_POST['id'];
        $editFN = $_POST['Firstname'];
        $editLN = $_POST['Lastname'];
        $editEM = $_POST['Email'];
        $editCT = $_POST['Contact'];
        $editPW = $_POST['Password'];
    }
    if (isset($_POST['btnUpdate'])) {
        $updateID = $_POST['ID'];
        $updateFN = $_POST['txtFname'];
        $updateLN = $_POST['txtLname'];
        $updateEM = $_POST['txtEmail'];
        $updateCT = $_POST['txtContact'];
        $updatePW = $_POST['txtPassword'];
        $query = "UPDATE `accounts` SET `firstname` = '$updateFN', `lastname` = '$updateLN', `email` = '$updateEM', `contact` = '$updateCT', `password` = '$updatePW' WHERE `ID` = '$updateID' ";
        $sql = mysqli_query($con, $query);
        echo '<script> alert ("successfully updated!") </script>';
        echo '<script> window.location.href="users.php" </script>';
        // code...
    }
?>
<!-- HEADER -->
<?php   include '../includes/header.php';?>
<!-- HEADER -->
    <link rel="stylesheet" href="../style/usersStyle.css">
    <div class="container">
        <div class="header">
            <div>
                <img src="../images/user.png" alt="user">
            </div>
            <div>
                <h1>Users</h1>
            </div>
        </div>
            
        <form action="update.php" method="post">
            <input type="hidden" name="ID" value="<?php echo $editID ?>">
            <p>
                <label>Firstname: </label>&nbsp&nbsp
                <input type="text" name="txtFname" value="<?php echo $editFN ?>">
            </p>
            <p>
                <label>Lastname: </label>&nbsp&nbsp
                <input type="text" name="txtLname" value="<?php echo $editLN ?>">
            </p>
            <p>
                <label>Email: </label>&nbsp&nbsp
                <input type="text" name="txtEmail" value="<?php echo $editEM ?>">
            </p>
            <p>
                <label>Contact: </label>&nbsp&nbsp
                <input type="text" name="txtContact" value="<?php echo $editCT ?>">
            </p>
            <p>
                <label>Password: </label>&nbsp&nbsp
                <input type="text" name="txtPassword" value="<?php echo $editPW ?>">
            </p>
            <p>
                <label></label>&nbsp&nbsp
                <input type="submit" name="btnUpdate" id="sub">
            </p>
        </form>
    </div>

<!-- FOOTER -->
<?php   include '../includes/footer.php';    ?>
<!-- FOOTER -->
