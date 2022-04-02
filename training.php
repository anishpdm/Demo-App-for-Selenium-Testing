<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">



                <center>
                    <h1> Student SignIn </h1>
                </center>
                <form action="" method="post">

                    <table class="table table-borderless">
                        
                        <tr>
                            <td> Email id </td>
                            <td><input required type="text" name="loginEmail" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Password </td>
                            <td><input required type="password" name="loginpass" class="form-control"> </td>
                        </tr>

                       
                       
                        <tr>
                            <td> </td>
                            <td> <button name="loginbtn" class="btn btn-success"> LOGIN </button> </td>
                        </tr>
                    </table>
                </form>



            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

                <center>
                    <h1> Student SignUp </h1>
                </center>
                <form action="" method="post">

                    <table class="table table-borderless">
                        <tr>
                            <td> Name </td>
                            <td><input required type="text" name="name" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td> Gender</td>
                            <td> <input type="radio" value="Male" name="gen"> Male &nbsp;&nbsp;&nbsp;<input type="radio" value="Female" name="gen"> FeMale </td>
                        </tr>
                        <tr>
                            <td> Branch </td>
                            <td> <select name="branch" class="form-control">

                                    <option value="CSE"> CSE</option>
                                    <option value="ME"> ME</option>
                                    <option value="EEE"> EEE </option>
                                    <option value="EC"> EC </option>

                                </select> </td>

                        </tr>

                        <tr>
                            <td> D.O.B </td>
                            <td><input required type="date" name="dob" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Address </td>
                            <td> <textarea class="form-control" name="Address" cols="30" rows="10"></textarea> </td>
                        </tr>

                        <tr>
                            <td> Pincode </td>
                            <td><input required type="text" name="Pincode" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td><input required type="text" name="Mobile" class="form-control"> </td>
                        </tr>


                        <tr>
                            <td> Email id </td>
                            <td><input required type="text" name="Email" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Password </td>
                            <td><input required type="password" name="pass" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Confirm Password </td>
                            <td><input required type="password" name="cnfpass" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tick" name="fcheckbox">
                                    <label class="form-check-label" for="fcheckbox">
                                        Agree Terms & conditions
                                    </label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td> </td>
                            <td> <button name="subbtn" class="btn btn-success"> REGISTER </button> </td>
                        </tr>
                    </table>
                </form>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php

if(isset($_POST['loginbtn']))
{

    echo "<br>";
    echo "Email :" .  $_POST['loginEmail'];


    echo "<br>";
    echo "Password :" .  $_POST['loginpass'];


}

if (isset($_POST['subbtn'])) {


    if ($_POST['pass'] == $_POST['cnfpass']) {
        echo "<script>  alert('Thank You for submitting the values ')  </script>";
        echo "Name : " .  $_POST['name'];
        echo "<br>";
        echo "Gender :" .  $_POST['gen'];
        echo "<br>";
        echo "Branch :" .  $_POST['branch'];

        echo "<br>";
        echo "Address :" .  $_POST['Address'];

        echo "<br>";
        echo "Pincode :" .  $_POST['Pincode'];

        echo "<br>";
        echo "Mobile :" .  $_POST['Mobile'];

        echo "<br>";
        echo "DOB :" .  $_POST['dob'];


        echo "<br>";
        echo "Email :" .  $_POST['Email'];


        echo "<br>";
        echo "Password :" .  $_POST['pass'];
    } else {
        echo "<script>  alert('Password and Confirm Password doesnt MATCH ')  </script>";
    }
}


?>