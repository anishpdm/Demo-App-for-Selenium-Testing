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
                <center>
                    <h1> Movie Details </h1>
                </center>
                <form action="" method="post">

                    <table class="table table-borderless">
                        <tr>
                            <td> Movie Name </td>
                            <td><input required type="text" name="mname" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Year of Release </td>
                            <td><input required type="text" name="myear" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Director name </td>
                            <td><input required type="text" name="mdirector" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td> Distributor </td>
                            <td><input required type="text" name="mdist" class="form-control"> </td>
                        </tr>
                        <tr>
                            <td> Producer </td>
                            <td><input required type="text" name="mproducer" class="form-control"> </td>
                        </tr>

                        <tr>
                            <td> Language </td>
                            <td> <select name="mlang" class="form-control">
                                    <option value="Tamil"> Tamil </option>
                                    <option value="Malayalam"> Malayalam</option>
                                    <option value="English"> English</option>
                                    <option value="Telungu"> Telungu </option>
                                    <option value="Kannada"> Kannada </option>

                                </select> </td>

                        </tr>


                        <tr>
                            <td> </td>
                            <td> <button name="subbtn" class="btn btn-success"> SUBMIT </button> </td>
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
    echo "MovieName : " .  $_POST['mname'];
    echo "<br>";
    echo "Year :" .  $_POST['myear'];
    echo "<br>";
    echo "director :" .  $_POST['mdirector'];

    echo "<br>";
    echo "distributor :" .  $_POST['mdist'];

    echo "<br>";
    echo "producer :" .  $_POST['mproducer'];

    echo "<br>";
    echo "Language :" .  $_POST['mlang'];
}


?>