<aside class="sidebar sidebar-default navs-rounded ">
    <div class="sidebar-header d-flex align-items-center justify-content-start">
        <a href="{{route('dashboard')}}" class="navbar-brand dis-none align-items-center">
            <img src="{{asset('back/images/logo.svg')}}" class="img-fluid "  alt="logo">            <h4 class="logo-title m-0">OINEX</h4>
        </a>
        <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
            <i class="icon">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5"></path>
                    <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
            </i>
        </div>
    </div>
    <div class="sidebar-body p-0 data-scrollbar">
        <div class="navbar-collapse pe-3" id="sidebar">
            <ul class="navbar-nav iq-main-menu">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="{{route('dashboard')}}">
                        <i class="icon">
                            <svg width="22" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.15722 20.7714V17.7047C9.1572 16.9246 9.79312 16.2908 10.581 16.2856H13.4671C14.2587 16.2856 14.9005 16.9209 14.9005 17.7047V17.7047V20.7809C14.9003 21.4432 15.4343 21.9845 16.103 22H18.0271C19.9451 22 21.5 20.4607 21.5 18.5618V18.5618V9.83784C21.4898 9.09083 21.1355 8.38935 20.538 7.93303L13.9577 2.6853C12.8049 1.77157 11.1662 1.77157 10.0134 2.6853L3.46203 7.94256C2.86226 8.39702 2.50739 9.09967 2.5 9.84736V18.5618C2.5 20.4607 4.05488 22 5.97291 22H7.89696C8.58235 22 9.13797 21.4499 9.13797 20.7714V20.7714" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        </i>
                        <span class="item-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" aria-current="page" href="{{route('particpant')}}">
                        <i class="icon">
                            <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.4" d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z" fill="currentColor"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z" fill="currentColor"></path>
                            </svg>
                        </i>
                        <span class="item-name">Participants</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
