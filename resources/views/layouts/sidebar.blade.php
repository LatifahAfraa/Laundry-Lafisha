<!--**********************************
            Sidebar start
        ***********************************-->
<div class="deznav">
    <div class="deznav-scroll">
        <ul class="menu" id="menu">
                <li>
                    <a href="{{ route('home') }}" class="ai-icon active" aria-expanded="false">
                        <i class="flaticon-381-home-3"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pelanggan.index') }}" class="ai-icon " aria-expanded="false">
                        <i class="flaticon-381-user-2"></i>
                        <span class="nav-text">Pelanggan</span>
                    </a>
                </li>



                <li>
                    <form action="{{ route('logout') }}" method="post" id="form-logout">
                        @csrf
                    </form>
                    <a onclick="$('#form-logout').submit()" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-turn-off"></i>
                        <span class="nav-text">Keluar</span>
                    </a>
                  </li>

        </ul>
    </div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->

<!--**********************************
            EventList
        ***********************************-->


