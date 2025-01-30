<!-- header -->
<?php 
if (isset($header)) {
    $this->load->view($header);
}
if (isset($navbar)) {
    $this->load->view($navbar);
}
if (isset($sidebar)) {
    $this->load->view($sidebar);
}
?>
<!-- /.Header -->

<!--begin::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <?php 
    if (isset($breadcrumb)) {
        $this->load->view($breadcrumb);
    }
    ?>
    <!-- /.content-header -->

    <!-- App content & Footer -->
    <?php 
    if (isset($page)) {
        $this->load->view($page);
    }
    if (isset($footer)) {
        $this->load->view($footer);
    }
    ?>
    <!-- /.content -->
</main>
