<ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color:rgb(99, 140, 201);" id="accordionSidebar">

<style> 
li a:hover{
    background-color: black;
}
</style>


    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon rotate-n-15">
           
        </div>
        <div class="sidebar-brand-text mx-3">Galleryous</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}" >
            <i class="bi bi-envelope-paper-heart-fill"></i>
            <span>Home</span>
        </a>
    </li>
    {{-- <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="bi bi-collection"></i>
            <span>Koleksi</span></a> --}}
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{route('logout')}}">
            <i class="bi bi-box-arrow-left"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <br class="sidebar divider d-one d-md-block">

    <div class="text-center d-one d-md-inline">
        <button class="rounded-circle bprder-0" id="sidebarToggle"></button>
    </div>


</ul>

