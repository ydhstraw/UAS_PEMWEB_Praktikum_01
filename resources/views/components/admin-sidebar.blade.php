<div class="sidebar-menu">
    <header class="logo1">
        <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
    </header>
    <div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
    <div class="menu">
        <ul id="menu">
            <li>
				<a href="/admin/dashboard">
					<i class="fa fa-tachometer"></i>
					<span>Dashboard</span>
                    <div class="clearfix"></div>
                </a>
			</li>

            {{-- <li id="menu-academico">
				<a href="#">
					<i class="fa fa-list-ul" aria-hidden="true"></i>
					<span> Tour Packages</span> <span class="fa fa-angle-right" style="float: right"></span>
                    <div class="clearfix"></div>
                </a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="/admin/insert">Create</a></li>
                    <li id="menu-academico-avaliacoes"><a href="/admin/hotels">Manage</a></li>
                </ul>
            </li> --}}

            <li id="menu-academico">
				<a href="/admin/insert">
					<i class="fa fa-plus" aria-hidden="true"></i>
					<span>Insert New Hotel</span>
                    <div class="clearfix"></div>
                </a>
			</li>

            <li id="menu-academico">
				<a href="/admin/hotels">
					<i class="fa fa-hospital-o" aria-hidden="true"></i>
					<span>Manage Hotels</span>
                    <div class="clearfix"></div>
                </a>
			</li>

            {{-- <li id="menu-academico">
				<a href="manage-users.php">
					<i class="fa fa-users" aria-hidden="true"></i>
					<span>Manage Users</span>
                    <div class="clearfix"></div>
                </a>
			</li> --}}

            <li>
				<a href="/admin/bookings">
					<i class="fa fa-list" aria-hidden="true"></i>
					<span>Manage Booking</span>
                    <div class="clearfix"></div>
                </a>
			</li>

        </ul>
    </div>
</div>

<script>
    var toggle = true;

    $(".sidebar-icon").click(function () {
        if (toggle) {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({
                "position": "absolute"
            });
        } else {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function () {
                $("#menu span").css({
                    "position": "relative"
                });
            }, 400);
        }

        toggle = !toggle;
    });

</script>