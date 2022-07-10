<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://siakad.unsub.ac.id/assets/login/css/loader.css">

    <style>
        body {
            /*font-family: 'Rancho', serif;*/
            font-weight: bold;
            background-image: url('https://siakad.unsub.ac.id/assets/login/images/bg-03.png');
            width: 100%;
            min-height: 100vh;
            /*display: flex;*/
            /*flex-wrap: wrap;*/
            /*justify-content: center;*/
            /*align-items: center;*/
            /*padding: 15px;*/
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>

<body onload="myFunction()" class="justify-content-center d-flex align-items-center">

    <!-- <input checked="" type="checkbox" name="penerima_kps"> -->

    <div id="loader" style="display: none;"></div>


    <!-- ketika gak ada config.php -->
    <div class="container " id="myDiv" style="display: block;">
        <div class="row justify-content-center my-3 ">
            <div class="col-md-9">
                <div class="card shadow py-1">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5 justify-content-center d-flex align-items-center">
                                <img width="85%" height="85%" src="https://siakad.unsub.ac.id/assets/login/images/main_logo.jpg" alt="">
                            </div>
                            <div class="col-md-7">
                                <div class="card mt-2">
                                    <div class="card-body">
                                        <h1 class="text-danger">SIAKAD VERSI LITE</h1>

                                        <form action="" method="post">
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username :</label>
                                                <input type="text" autocomplete="off" required="" class="form-control" id="username" name="username" placeholder="D1A200XXX">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password :</label>
                                                <input type="password" required="" class="form-control" id="password" name="password">
                                            </div>

                                            <button type="submit" class="btn btn-primary" name="login">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 100);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }

        function cart() {
            alert('Gak Bisa Disini Makh, Buka di situs siakad aslinya yakh ^_^');
        }

        var option = {
            animation: true,
            delay: 2000,
        }


        var toastButton = document.getElementById('liveToastBtn');

        toastButton.addEventListener('click', function() {
            var toastHTMLElement = document.getElementById('liveToast');
            var toastElement = new bootstrap.Toast(toastHTMLElement, option);
            toastElement.show();


        })
    </script>

    <!-- https://www.youtube.com/watch?v=AZs4zggS7kA -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
-->


</body>

</html>