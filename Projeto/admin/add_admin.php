<?php include('partials/menu.php'); ?>


<div class="main_content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>

        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>


        <form action="" method="POST">

            <table>
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>    
                    <td>Password: </td>
                    <td><input type="password" name="password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn_update">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php

    if(isset($_POST['submit']))
    {
        // echo "worked" ;
        // - - - - - -pegar a info do form  - - - 
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        //  - -  -- -  -Query para guardar na base de dados  - - - - -
        $sql = "INSERT INTO admin SET
            fullname='$full_name',
            username='$username',
            password='$password'
        ";
        //  - - - - - Executar o query e guardar na base de dados  - - ----
        
        
        $res = mysqli_query($connect, $sql) or die(mysqli_eror());

        // - - - - - checkar se enviou - - - - - - 
        if($res==TRUE){
            // echo "Worked";
            $_SESSION['add'] = "Admin Added Successfully";
            header("location:".URL.'admin/manage_admin.php');
        }
        else{
            // echo "oops u dont know how to code ";
            $_SESSION['add'] = "Failed to Add Admin";
            header("location:".URL.'admin/add-admin.php');
        }

        // ------------------------------------


    }

?>