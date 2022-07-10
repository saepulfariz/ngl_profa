<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>
<div class="container bg-transparent">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center h-100" style="">

            <div class="justify-content-center d-flex align-items-center bg-emot" style="height: 100vh;">
                <div class="px-5">

                    <h1 class="head-ngl" style="margin-top: 250px;" id="">NGL_PROFA</h1>

                    <p class="fw-bold text-white pt-5 fs-4" style="margin-top: 50px;">Get anonymous messages on <br> instagram</p>

                    <a href="<?= base_url(); ?>/home/page2" class="btn py-3 px-5 fw-bold btn-light rounded-pill w-100" style="margin-top: 150px;">Get Question!</a>

                    <p class="text-white mt-5">By continuing, you agree to our <a href="#" class="text-white">Terms of Use</a> and have read and agreed to our <a href="#" class="text-white">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>