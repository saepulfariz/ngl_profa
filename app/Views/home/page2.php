<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>
<div class="container bg-transparent">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center h-100" style="">

            <div class="bg-emot" style="height: 100vh;">
                <div class="px-5">

                    <h1 class="head-ngl pt-5" id="">NGL_PROFA</h1>

                    <p class="fw-bold text-white pt-5 fs-4" style="margin-top: 0px;">What's your Instagram handle?</p>
                    <p>Ex: @saepulfariz</p>
                    <input type="text" id="input-ku" name="input-ku" class="form-control py-3 rounded-pill text-center border-0 input-ku fw-bold" style="background-color: rgba(255, 255, 255, 0.3);color: rgba(0, 0, 0, 0.4);">

                    <a href="<?= base_url(); ?>/home/page3" id="submit" class="btn py-3 px-5 fw-bold btn-light rounded-pill w-100 mt-3 " style="margin-top: 0px;">Submit</a>
                    <!-- transition: opacity 0.6s linear; -->
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script>
    $('#submit').hide();
    document.getElementById('input-ku').addEventListener('click', function() {
        // document.getElementById('submit').classList.remove('d-none');
        $('#submit').fadeIn('slow');
    })
</script>
<?= $this->endSection('script'); ?>