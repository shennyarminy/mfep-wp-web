<!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li>
                    <a href="<?= base_url('admin') ?>">
                        <i class="fa fa-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                 <li>
                    <a href="<?= base_url('admin/data-kriteria') ?>">
                        <i class="fa fa-cubes"></i> 
                        <span class="title">Kriteria</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-calon-penerima-bantuan2') ?>">
                        <i class="fa fa-list"></i> 
                        <span class="title">Data Calon Penerima Bantuan</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-kades') ?>">
                        <i class="fa fa-users"></i> 
                        <span class="title">Data Kepala Desa</span>
                    </a>
                </li>
                 <!-- <li>
                    <a href="<?= base_url('admin/perangkingan') ?>">
                        <i class="fa fa-sort-amount-asc"></i> 
                        <span class="title">Perangkingan</span>
                    </a>
                </li> -->
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
