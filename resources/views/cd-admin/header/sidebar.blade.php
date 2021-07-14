

<!-- BEGIN SIDEBAR -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
        <li class="nav-item start active open">

                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-columns"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>


            <ul class="sub-menu">
                
                <li class="nav-item start ">
                    <a href="{{route('view.client')}}" class="nav-link ">
                        <i class="fa fa-user"></i>

                        <span class="title">Client </span>

                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('view.domain')}}" class="nav-link ">
                        <i class="fa fa-database"></i>

                        <span class="title">Domain </span>

                    </a>
                </li>
                <li class="nav-item start ">
                    <a href="{{route('view.host')}}" class="nav-link ">
                        <i class="fa fa-server"></i>
                        <span class="title">Hosting</span>

                    </a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

