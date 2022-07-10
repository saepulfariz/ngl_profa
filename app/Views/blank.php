<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
    </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>
    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
        <button id="homeku">Home</button>
    </div>
</div>


<?= $this->endSection('content'); ?>


<?= $this->section('script'); ?>

<script>

</script>

<script>
    var firstTabEl = document.querySelector('#myTab li:last-child button')
    var firstTab = new bootstrap.Tab(firstTabEl)

    firstTab.show()

    document.getElementById('homeku').addEventListener('click', function() {
        var firstTabEl = document.querySelector('#myTab li:first-child button')
        var firstTab = new bootstrap.Tab(firstTabEl)

        firstTab.show()
    })
</script>

<?= $this->endSection('script'); ?>