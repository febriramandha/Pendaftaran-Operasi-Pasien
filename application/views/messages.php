<?php if ($this->session->has_userdata('pesan')) { ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="alert" role="alert" style="background-color: #d4edda; color: #155724; border-color: #c3e6cb;">
                <i class="fas fa-check"></i> <?= $this->session->flashdata('pesan'); ?>
            </div>
        </div>
    </div>
<?php } ?>

<?php if ($this->session->has_userdata('error')) { ?>
    <div class="row">
        <div class="col-sm-6">
            <div class="alert" role="alert" style="background-color: #f8d7da; color: #721c24; border-color: #f5c6cb;">
                <i class=" fas fa-ban"></i> <?= $this->session->flashdata('error'); ?>
            </div>
        </div>
    </div>
<?php } ?>