<nav class="navbar top-navbar col-lg-12 col-12 p-0">
    <div class="container-fluid">
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
        <ul class="navbar-nav navbar-nav-left">
          <li class="nav-item ms-0 me-5 d-lg-flex d-none">
            <a href="#" class="nav-link horizontal-nav-left-menu"><i class="mdi mdi-format-list-bulleted"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count bg-success">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                </div>
                <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-email mx-0"></i>
              <span class="count bg-primary">4</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
                    </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link count-indicator "><i class="mdi mdi-message-reply-text"></i></a>
          </li>
          <li class="nav-item nav-search d-none d-lg-block ms-3">
            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="search">
                    <i class="mdi mdi-magnify"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
            </div>
          </li>	
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="https://www.bhurr.co.in/dashboard">
              {{-- <img src="images/logo.svg" alt="logo"/> 
              <h1>Bhurr</h1>--}}
			<img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" width="150px" alt="logo">
            </a>
            <a class="navbar-brand brand-logo-mini" href="https://www.bhurr.co.in/dashboard">
              {{-- <img src="images/logo-mini.svg" alt="logo"/>
              <h1>Bhurr</h1> --}}
			<img src="{{asset('frontend/assets/image/logo/Bhurr-New-Logo.png')}}" width="75px" alt="logo">
            </a>
        </div>
        <ul class="navbar-nav navbar-nav-right d-none">
            <li class="nav-item dropdown  d-lg-flex d-none">
              <button type="button" class="btn btn-inverse-primary btn-sm">Product </button>
            </li>
            <li class="nav-item dropdown d-lg-flex d-none">
              <a class="dropdown-toggle show-dropdown-arrow btn btn-inverse-primary btn-sm" id="nreportDropdown" href="#" data-bs-toggle="dropdown">
              Reports
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="nreportDropdown">
                  <p class="mb-0 font-weight-medium float-left dropdown-header">Reports</p>
                  <a class="dropdown-item">
                    <i class="mdi mdi-file-pdf text-primary"></i>
                    Pdf
                  </a>
                  <a class="dropdown-item">
                    <i class="mdi mdi-file-excel text-primary"></i>
                    Exel
                  </a>
              </div>
            </li>
            <li class="nav-item dropdown d-lg-flex d-none">
              <button type="button" class="btn btn-inverse-primary btn-sm">Settings</button>
            </li>
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <span class="nav-profile-name"> {{ Auth::user()->name }}</span>
                <span class="online-status"></span>
                <img src="images/faces/face28.png" alt="profile"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="mdi mdi-settings text-primary"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </div>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </div>
  </nav>
  <nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="mdi mdi-file-document-box menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{url('all-enquiries')}}" class="nav-link">
                <i class="mdi mdi-library-books menu-icon"></i>
                <span class="menu-title">All Bookings</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                  <ul>
                    <li class="nav-item"><a class="nav-link" href="{{url('add-new-enquiry')}}">Add Bookings</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{url('all-enquiries')}}">All Bookings</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{url('on-going-enquiries')}}">On Going Bookings</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{url('complete-enquiries')}}">Completed Bookings</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{url('cancelled-enquiries')}}">Cancelled Bookings</a></li>
                  </ul>
              </div>
          </li>
          <li class="nav-item">
            <a href="{{url('vendor-list')}}" class="nav-link">
              <i class="mdi mdi-account-multiple menu-icon"></i>
              <span class="menu-title">Vendors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="submenu">
                <ul>
                    <li class="nav-item"><a class="nav-link" href="{{url('vendor-list')}}">All Vendor</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('vendor-add')}}">Add Vendor</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
          <a href="{{url('driver-list')}}" class="nav-link">
            <i class="mdi mdi-account-multiple menu-icon"></i>
            <span class="menu-title">Drivers</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="submenu">
              <ul>
                  <li class="nav-item"><a class="nav-link" href="{{url('driver-list')}}">All Driver</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{url('add-driver')}}">Add Driver</a></li>
              </ul>
          </div>
      </li>
          <li class="nav-item d-none">
              <a href="pages/forms/basic_elements.html" class="nav-link">
                <i class="mdi mdi-chart-areaspline menu-icon"></i>
                <span class="menu-title">Form Elements</span>
                <i class="menu-arrow"></i>
              </a>
          </li>
          <li class="nav-item d-none">
              <a href="pages/charts/chartjs.html" class="nav-link">
                <i class="mdi mdi-finance menu-icon"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
              </a>
          </li>
          <li class="nav-item d-none">
              <a href="pages/tables/basic-table.html" class="nav-link">
                <i class="mdi mdi-grid menu-icon"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
              </a>
          </li>
          <li class="nav-item d-none">
              <a href="pages/icons/mdi.html" class="nav-link">
                <i class="mdi mdi-emoticon menu-icon"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
              </a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="mdi mdi-car menu-icon"></i>
                <span class="menu-title">Vehicle Master</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="submenu">
                  <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="{{route('cars-type')}}">Car Types</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('car-class')}}">Car Class</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('avilable-cars')}}">Available cars</a></li>
                      
                  </ul>
              </div>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              {{-- <a href="{{route('fare-management')}}" class="nav-link"> --}}
                <i class="mdi mdi-currency-inr menu-icon">
                </i>
                <span class="menu-title">Fare Management</span>
                <i class="menu-arrow"></i>
              </a>

                <div class="submenu">
                  <ul class="submenu-item">
                      <li class="nav-item"><a class="nav-link" href="{{route('local-fare')}}">Local fare</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('outstation-fare')}}">Outstation fare</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('oneway-fare')}}">One Way fare</a></li>
                      <li class="nav-item"><a class="nav-link" href="{{route('cancellation-policy')}}">Cancellation Policy</a></li>
                  </ul>
              </div>
          </li>
        </ul>
    </div>
  </nav>