<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url(); ?>/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- script by saepulfariz 8/07/2022  -->
    <title>NGL - Codeigniter 4</title>

    <style>
        @font-face {
            font-family: 'Olive Days';
            /* font-style: italic; */
            font-weight: 300;
            /* font-display: swap; */
            src: url(<?= base_url(); ?>/font/OliveDays.otf) format('opentype');
            /* unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB; */
        }

        @font-face {
            font-family: "CustomFont";
            src: url("CustomFont.eot");
            src: url("CustomFont.woff") format("woff"),
                url("CustomFont.otf") format("opentype"),
                url("CustomFont.svg#filename") format("svg");
        }

        body {
            background-image: url('<?= base_url(); ?>/images/website-bg.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            width: 100%;
            /* min-height: 100vh; */
        }

        .bg-emot {
            background-image: url('<?= base_url(); ?>/images/src_assets_background.png');
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
        }

        .head-ngl {
            font-family: 'Olive Days';
            /* font-size: 80px; */
            font-size: 55px;
            -webkit-text-stroke: 5px black;
            /* font-family: arial; */
            color: white;
            transform: rotate(-2deg);
        }

        .input-ku {
            background-color: rgba(255, 255, 255, 0.3);

        }

        .input-ku::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: red;
            opacity: 1;
            /* Firefox */
        }

        .input-ku:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: red;
        }

        .input-ku::-ms-input-placeholder {
            /* Microsoft Edge */
            color: red;
        }
    </style>

    <?= $this->renderSection('head'); ?>


</head>

<body class="">



    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="<?= base_url(); ?>/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <script>
        var triggerTabList = [].slice.call(document.querySelectorAll('#myTab button'))
        console.log(triggerTabList);
        triggerTabList.forEach(function(triggerEl) {
            var tabTrigger = new bootstrap.Tab(triggerEl)

            triggerEl.addEventListener('click', function(event) {
                event.preventDefault()
                tabTrigger.show()
                console.log('kuyh');
            })
        })
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?= $this->renderSection('script'); ?>
</body>

</html>