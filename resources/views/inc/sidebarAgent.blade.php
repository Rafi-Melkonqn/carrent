<div class="d-flex flex-row" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right "style="background-image:url('../storage/postCrudCar/images/bridge-16.jpg');" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <a href="/agents/confirmRequest" class=" btn btn-dark btn-outline-warning"role="button">Request</a>
            <a href="/agents/myCar" class=" btn btn-dark btn-outline-warning"role="button">My Car</a>
            <a href="/agents/news"class=" btn btn-dark btn-outline-warning"role="button">News</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    {{--    <!-- Page Content -->--}}
    {{--    <div id="page-content-wrapper">--}}

    {{--        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">--}}
    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">--}}
    {{--                    <li class="nav-item active">--}}
    {{--                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item">--}}
    {{--                        <a class="nav-link" href="#">Link</a>--}}
    {{--                    </li>--}}
    {{--                    <li class="nav-item dropdown">--}}
    {{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                            Dropdown--}}
    {{--                        </a>--}}
    {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                            <a class="dropdown-item" href="#">Action</a>--}}
    {{--                            <a class="dropdown-item" href="#">Another action</a>--}}
    {{--                            <div class="dropdown-divider"></div>--}}
    {{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
    {{--                        </div>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </nav>--}}
    {{--    </div>--}}
    {{--    <!-- /#page-content-wrapper -->--}}

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
