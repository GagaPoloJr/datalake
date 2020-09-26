<?php if ($this->session->flashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('info')) : ?>
    <div class="alert alert-info" role="alert">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
        <?php echo $this->session->flashdata('info'); ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('warning')) : ?>
    <div class="alert alert-warning" role="alert">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
        <?php echo $this->session->flashdata('warning'); ?>
    </div>
<?php endif; ?>
<?php if ($this->session->flashdata('danger')) : ?>
    <div class="alert alert-danger" role="alert">
        <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true" class="fa fa-times"></span></button>
        <?php echo $this->session->flashdata('danger'); ?>
    </div>
<?php endif; ?>