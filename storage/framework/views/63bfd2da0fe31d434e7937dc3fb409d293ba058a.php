<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>

                <li>
                    <a href="<?php echo e(route('inicioReserva')); ?>">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard">Reservas</span>
                    </a>
                </li>
            </ul>

        </div>

    </div>
</div>

<?php /**PATH C:\xampp\htdocs\reseva_salas\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>