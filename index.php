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
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
            <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">

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
                                    <option value="CSE"> EEE </option>
                                    <option value="CSE"> EC </option>

                                </select> </td>

                        </tr>


                        <tr>
                            <td> </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="tick" name="fcheckbox" disabled>
                                    <label class="form-check-label" for="fcheckbox">
                                        Agree Terms & conditions
                                    </label>
                                </div>
                            </td>

                        </tr>
                        <tr>
                            <td> </td>
                            <td> <button name="subbtn" class="btn btn-success"> LogIn</button> </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2"></div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>

<?php

if (isset($_POST['subbtn'])) {
    echo "<script>  alert('Thank You for submitting the values ')  </script>";
    echo "Name : " .  $_POST['name'];
    echo "<br>";
    echo "Gender :" .  $_POST['gen'];
    echo "<br>";
    echo "Branch :" .  $_POST['branch'];
}


?>