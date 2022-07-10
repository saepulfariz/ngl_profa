<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>

<style>
    .nav-tabs .nav-link {
        color: #aaa;
        border: none;
    }

    .nav-tabs .nav-item.show .nav-link,
    .nav-tabs .nav-link.active {
        color: #000;
        font-weight: bold;
        background-color: transparent;
        /* border-color: none; */
        border: none;
    }

    .nav-tabs .nav-link:focus,
    .nav-tabs .nav-link:hover {
        /* border-color: #e9ecef #e9ecef #dee2e6; */
        isolation: isolate;
        border: none;
    }

    .setting-ku {
        /* position: fixed; */
        /* position: absolute; */
        /* position: relative; */
        /* top: 10px;
        right: 10px;
        z-index: 2; */
        right: 10px;
        top: 10px;
    }
</style>
<div class="container bg-transparent">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center h-100" style="">

            <div class="bg-light pb-3" style="min-height: 100vh;">
                <div class="px-0">

                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col mx-auto">
                                <div class="position-relative">
                                    <div class="setting-ku position-absolute translate-middle-x" data-bs-toggle="modal" data-bs-target="#settingModal">
                                        <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-wide" viewBox="0 0 16 16">
                                            <path d="M8.932.727c-.243-.97-1.62-.97-1.864 0l-.071.286a.96.96 0 0 1-1.622.434l-.205-.211c-.695-.719-1.888-.03-1.613.931l.08.284a.96.96 0 0 1-1.186 1.187l-.284-.081c-.96-.275-1.65.918-.931 1.613l.211.205a.96.96 0 0 1-.434 1.622l-.286.071c-.97.243-.97 1.62 0 1.864l.286.071a.96.96 0 0 1 .434 1.622l-.211.205c-.719.695-.03 1.888.931 1.613l.284-.08a.96.96 0 0 1 1.187 1.187l-.081.283c-.275.96.918 1.65 1.613.931l.205-.211a.96.96 0 0 1 1.622.434l.071.286c.243.97 1.62.97 1.864 0l.071-.286a.96.96 0 0 1 1.622-.434l.205.211c.695.719 1.888.03 1.613-.931l-.08-.284a.96.96 0 0 1 1.187-1.187l.283.081c.96.275 1.65-.918.931-1.613l-.211-.205a.96.96 0 0 1 .434-1.622l.286-.071c.97-.243.97-1.62 0-1.864l-.286-.071a.96.96 0 0 1-.434-1.622l.211-.205c.719-.695.03-1.888-.931-1.613l-.284.08a.96.96 0 0 1-1.187-1.186l.081-.284c.275-.96-.918-1.65-1.613-.931l-.205.211a.96.96 0 0 1-1.622-.434L8.932.727zM8 12.997a4.998 4.998 0 1 1 0-9.995 4.998 4.998 0 0 1 0 9.996z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <nav class="mt-2 mb-5" id="myTab">

                                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-play-tab" data-bs-toggle="tab" data-bs-target="#nav-play" type="button" role="tab" aria-controls="nav-play" aria-selected="true">PLAY</button>
                                    <button class="nav-link" id="nav-inbox-tab" data-bs-toggle="tab" data-bs-target="#nav-inbox" type="button" role="tab" aria-controls="nav-inbox" aria-selected="false">INBOX</button>
                                </div>

                            </nav>

                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-play" role="tabpanel" aria-labelledby="nav-play-tab">
                            <div class="row px-4 justify-content-center ">
                                <div class="row">
                                    <div class="col">
                                        <div class="card d-flex flex-row justify-content-center align-items-center" style="background-image: linear-gradient(to bottom right, #EE1681, #FA6C30);border-radius: 30px;height: 200px;">
                                            <div class="card-body">
                                                <p class="text-white fw-bold fs-3">Send me anoymous messages!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <p class="text-danger fw-bold fs-3">Get anonymouse messages!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="card d-flex flex-row justify-content-center align-items-center border-0" style="background-color: #FFE4E1;border-radius: 30px;height: 170px;">
                                            <div class="card-body">
                                                <p class="text-dark fw-bold fs-5">Step 1 : Copy your link</p>
                                                <p id="link-ku" class="fs-5 text-capitalize" style="color: #aaa">NG.lINK/SAEPULFARIZ</p>
                                                <button id="submit" class="btn btn-outline-danger rounded-pill px-4">copy link</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col">
                                        <div class="card d-flex flex-row justify-content-center align-items-center border-0" style="background-color: #FFE4E1;border-radius: 30px;height: 170px;">
                                            <div class="card-body">
                                                <p class="text-dark fw-bold fs-5">Step 2 : Share link on your <br> Instagram Story</p>
                                                <button class="btn btn-danger rounded-pill w-50 fw-bold">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share-fill me-1" viewBox="0 0 16 16">
                                                        <path d="M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z" />
                                                    </svg> Share!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-inbox" role="tabpanel" aria-labelledby="nav-inbox-tab">
                            <div class="row px-4 justify-content-center">
                                <div class="row">
                                    <div class="col">
                                        <p class="fw-bold fs-3 text-danger">Your inbox is empty 🥺</p>
                                        <p class="pt-0">Share a sticker to get questions in <br> your inbox!</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <img width="80%" src="<?= base_url(); ?>/images/src_assets_inbox_scroll.png" alt="">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col">
                                        <button id="move-ku" class="btn btn-dark py-3 rounded-pill w-75 fw-bold">Get Messanges</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="settingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="settingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="settingModalLabel">Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col text-center">
                        <p class="text-danger fs-3 fw-bold">What is NGL?</p>
                        <p class="fw-bold">NGL in a fun way to get anonymous messages <br> from your friends</p>

                        <p class="text-danger fs-3 fw-bold">How does itu work?</p>
                        <p class="fw-bold">You can get messages by sharing your NGL <br> ink on your story or adding it your bio</p>
                        <p class="fw-bold">You can share it anywhere on teh internet!</p>

                        <div class="mb-2 mt-5">
                            <button class="btn w-75 rounded-pill btn-outline-dark">Follow us on IG</button>
                        </div>
                        <div class="mb-2">

                            <button class="btn w-75 rounded-pill btn-outline-dark">I need help</button>
                        </div>
                        <div class="mb-2">

                            <button class="btn w-75 rounded-pill btn-outline-danger">Delete Account</button>
                        </div>

                        <div style="margin-top: 100px;">
                            <h1 class="head-ngl" style="font-size: 50px;" id="">NGL_PROFA</h1>
                            <p>Made with <span class="text-danger">❤</span> in Venice Beach, CA & Porto, PT</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>

<?= $this->section('script'); ?>

<script>
    // $('#submit').hide();
    // document.getElementById('input-ku').addEventListener('click', function() {
    //     // document.getElementById('submit').classList.remove('d-none');
    //     $('#submit').fadeIn('slow');
    // })


    // var tabEl = document.querySelector('button[data-bs-toggle="tab"]')
    // tabEl.addEventListener('shown.bs.tab', function(event) {
    //     event.target // newly activated tab
    //     event.relatedTarget // previous active tab
    // })


    document.getElementById('move-ku').addEventListener('click', function() {
        // console.log('Oke');
        // var firstTabEl = document.querySelector('#myTab .nav-link:first-child')
        // var firstTab = new bootstrap.Tab(firstTabEl)

        // firstTab.show()
        var triggerEl = document.querySelector('#myTab button[data-bs-target="#nav-play"]')

        // var firstTab = new bootstrap.Tab(triggerEl)

        // firstTab.show()
        // console.log(triggerEl);
        bootstrap.Tab.getInstance(triggerEl).show() // Select tab by name
    })


    function copyText() {
        /* Get the text field */
        var copyText = document.getElementById("link-ku");

        /* Select the text field */
        // copyText.select();
        // copyText.setSelectionRange(0, 99999); /* For mobile devices */

        /* Copy the text inside the text field */
        navigator.clipboard.writeText(copyText.innerHTML);

        /* Alert the copied text */
        alert("Copied the text: " + copyText.innerHTML);
    }


    document.getElementById('submit').addEventListener('click', function() {
        copyText()
        // console.log('oke');
    })
</script>
<?= $this->endSection('script'); ?>