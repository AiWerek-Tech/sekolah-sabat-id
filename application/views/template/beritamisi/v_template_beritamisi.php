<!-- Header -->
<?php if (isset($header) && $header): ?>
    <?php $this->load->view($header); ?>
<?php endif; ?>


<!-- Navbar -->
<?php
if (isset($navbar) && $navbar) {
    $this->load->view($navbar); // Memuat view navbar
}
?>

<!-- Main content -->
<?php $this->load->view($page); ?>
<!-- /.Main content -->

<!-- Footer -->
<?php $this->load->view($footer); ?>
<!-- /.Footer -->

<!-- Load modals if they are defined -->
<?php
for ($i = 1; $i <= 13; $i++) {
    $modal_var = 'modal_lesson' . $i;
    if (isset($$modal_var)) {
        $this->load->view($$modal_var);
    }
}
?>