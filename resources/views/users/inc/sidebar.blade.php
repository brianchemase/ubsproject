<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true"
    data-img="{{ asset('userdash/theme-assets/images/backgrounds/02.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('dash') }}"><img class="brand-logo"
                        alt="Chameleon admin logo" src="{{ asset('userdash/theme-assets/images/logo/logo.png') }}" />
                    <h3 class="brand-text">UBS Users</h3>
                </a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="active"><a href="{{ route('dash') }}"><i class="ft-home"></i><span class="menu-title"
                        data-i18n="">Dashboard</span></a>
            </li>
            <li class=" nav-item has-sub"><a href="{{ route('financialSustainabilityIndex') }}"><i
                        class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Finance Reports</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('incomeDiversificationForm') }}">Income Diversification</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('financeManagementForm') }}">Finance Management</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-sub"><a href="{{ route('missionSustainabilityIndex') }}"><i
                        class="ft-layers"></i><span class="menu-title" data-i18n="">Mission Reports</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="{{ route('bibleTranslationForm') }}">Bible Translation</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('biblePublishingAndDistributionForm') }}">Bible
                            Distribution</a>
                    </li>
                    <li><a class="menu-item" href="{{ route('scriptureEngagementForm') }}">Scripture Engagement</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item has-sub"><a href="#"><i class="ft-layers"></i><span class="menu-title"
                        data-i18n="">Programme Reports</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('governanceForm') }}">Governance</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('leadershipForm') }}">Leadership</a>
                            </li>
                        </ul>
            </li>
            <li class=" nav-item has-sub"><a href="{{ route('collaborationsIndex') }}"><i class="ft-box"></i><span
                        class="menu-title" data-i18n="">Collaborations</span></a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('membershipAndPartnership') }}">Membership and Partnership</a>
                            </li>
                            <li><a class="menu-item" href="{{ route('publicityAndCommunication') }}">Publicity and communication</a>
                            </li>
                        </ul>
            </li>
            <li class=" nav-item"><a href="{{ route('userblankpage') }}"><i class="ft-bold"></i><span
                        class="menu-title" data-i18n="">Blank Page</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('usertablepage') }}"><i class="ft-credit-card"></i><span
                        class="menu-title" data-i18n="">Tables</span></a>
            </li>
            <li class=" nav-item"><a href="{{ route('useradminforms') }}"><i class="ft-layout"></i><span
                        class="menu-title" data-i18n="">Form</span></a>
            </li>
            <li class=" nav-item"><a href="https://themeselection.com/demo/chameleon-admin-template/documentation"><i
                        class="ft-book"></i><span class="menu-title" data-i18n="">Documentation</span></a>
            </li>
        </ul>
    </div>
    <div class="navigation-background"></div>
</div>
