<?php   require('read.php');    ?>
<!-- HEADER -->
<?php   include '../includes/header.php';    ?>
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
            
        <form action="create.php" method="post">
            <p>
                <label>Firstname: </label>&nbsp&nbsp
                <input type="text" name="txtFname">
            </p>
            <p>
                <label>Lastname: </label>&nbsp&nbsp
                <input type="text" name="txtLname">
            </p>
            <p>
                <label>Email: </label>&nbsp&nbsp
                <input type="text" name="txtEmail">
            </p>
            <p>
                <label>Contact: </label>&nbsp&nbsp
                <input type="text" name="txtContact">
            </p>
            <p>
                <label>Password: </label>&nbsp&nbsp
                <input type="text" name="txtPassword">
            </p>
            <p>
                <label></label>&nbsp&nbsp
                <input type="submit" name="btnSubmit" id="sub">
            </p>
        </form>
        <hr>
        <table>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>
        <?php while ($result = mysqli_fetch_array($sql)) { ?>
            <tr>
                <td><?php echo $result["ID"] ?></td>
                <td><?php echo $result["firstname"] ?></td>
                <td><?php echo $result["lastname"] ?></td>
                <td><?php echo $result["email"] ?></td>
                <td><?php echo $result["contact"] ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input type="submit" name="btnEdit" value="EDIT">
                        <input type="hidden" name="id" value="<?php echo $result ["ID"]?>">
                        <input type="hidden" name="Firstname" value="<?php echo $result ["firstname"]?>">
                        <input type="hidden" name="Lastname" value="<?php echo $result ["lastname"]?>">
                        <input type="hidden" name="Email" value="<?php echo $result ["email"]?>">
                        <input type="hidden" name="Contact" value="<?php echo $result ["contact"]?>">
                        <input type="hidden" name="Password" value="<?php echo $result ["password"]?>">
                    </form>
                    <form action="delete.php" method="post">
                        <input type="submit" name="btnDelete" value="DELETE">
                        <input type="hidden" name="id" value="<?php echo $result ["ID"]?>">
                    </form>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
<!-- FOOTER -->
<?php   include '../includes/footer.php';    ?>
<!-- FOOTER -->
