<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <!-- <center> <img src="{{ asset('logo/sisdologo.png') }}" alt="logo" width="50" height="60"></center> -->
            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                    href="#" data-toggle="dropdown"> <span class="avatar img-fluid rounded me-1"><img
                            src="{{ asset('userdash/theme-assets/images/portrait/small/avatar-s-19.png') }}"
                            alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right"><a class="dropdown-item" href="#"><span
                                class="avatar avatar-online"><img
                                    src="{{ asset('userdash/theme-assets/images/portrait/small/avatar-s-19.png') }}"
                                    alt="avatar"><span class="avatar img-fluid rounded me-1">

                                </span></span>
                        </a>
                        <!--
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="#"><i class="ft-mail"></i> My Inbox</a>
                                <a class="dropdown-item" href="#"><i class="ft-check-square"></i> Task</a>
                                <a class="dropdown-item" href="#"><i class="ft-message-square"></i> Chats</a>
                               -->

                        <div class="dropdown-divider">
                        </div>
                        <form class="inline" method="POST" action="{{ route('logoutUser') }}">
                            @csrf
                            <button type="submit" class="dropdown-item"><i class="ft-power"></i> Logout</button>
                        </form>
                    </div>
                </div>
            </li>

            <li class="dropdown dropdown-user nav-item">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('adminsdash/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1"
                        alt="profile" /> <span class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i>
                        Analytics</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i>
                        Settings & Privacy</a>
                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i>
                        Help Center</a>


                </div>
            </li>
        </ul>
    </div>
</nav>
