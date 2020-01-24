<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>User</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN</li>
                    <li class="@if(Route::currentRouteName() == 'dashboard') active @endif"> <a href="{{route('dashboard')}}" class=""><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="">Calendrier</a></li>
                            <li><a href="">Liste de clients</a></li>
                        </ul>
                    </li>
                    <li @if(preg_match('#products#',Route::currentRouteName())) class="active open" @endif> <a class="menu-toggle" href="javascript:void(0);"><i class="zmdi zmdi-shopping-cart"></i><span>Produits</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="{{route('products.index')}}">Produits</a></li>
                            <li> <a href="{{route('products.list')}}">Produits liste</a></li>
                            <li> <a href="{{route('products.detail')}}">Produit détails</a></li>
                        </ul>
                    </li>
                    <li class="header">FORMS, CHARTS, TABLES</li>
                    <li @if(preg_match('#agenceA#',Route::currentRouteName())) class="active open" @endif> 
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="zmdi zmdi-assignment"></i>
                            <span>Forms</span> 
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route('agenceA.index')}}">AGENCE A</a> </li>
                            <li><a href="">Advanced Elements</a> </li>
                            <li><a href="">Form Examples</a> </li>
                            <li><a href="">Form Validation</a> </li>
                            <li><a href="">Form Wizard</a> </li>
                            <li><a href="">Editors</a> </li>
                            <li><a href="">File Upload</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="">Normal Tables</a> </li>
                            <li> <a href="">Jquery Datatables</a> </li>
                            <li> <a href="">Editable Tables</a> </li>

                            <li> <a href="">Tables Color</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> </a>
                        <ul class="ml-menu">
                            <li> <a href="">Morris</a> </li>
                            <li> <a href="">Flot</a> </li>
                            <li> <a href="">ChartJS</a> </li>
                            <li> <a href="">Sparkline</a> </li>
                            <li> <a href="">Jquery Knob</a> </li>
                            <li> <a href="">E Charts</a> </li>
                        </ul>
                    </li>
                    <li class="header">EXTRA COMPONENTS</li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                        <ul class="ml-menu">
                            <li><a href="">Apps Widgetse</a></li>
                            <li><a href="">Data Widgetse</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                        <ul class="ml-menu">
                            <li><a href="">Sign In</a> </li>
                            <li><a href="">Sign Up</a> </li>
                            <li><a href="">Forgot Password</a> </li>
                            <li><a href="">Page 404</a> </li>
                            <li><a href="">Page 500</a> </li>
                            <li><a href="">Page Offline</a> </li>
                            <li><a href="">Locked Screen</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                        <ul class="ml-menu">
                            <li><a href="">Blank Page</a> </li>
                            <li> <a href="">Image Gallery</a> </li>
                            <li><a href="">Profile</a></li>
                            <li><a href="">Timeline</a></li>
                            <li><a href="">Pricing</a></li>
                            <li><a href="">Invoices</a></li>
                            <li><a href="">Search Results</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="{{asset('images/profile_av.jpg')}}" alt="User"></a></div>
                            <div class="detail">
                                <h4>Michael</h4>
                                <small>UI UX Designer</small>
                            </div>
                            <a href="javascript:void(0);" title="facebook"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="m-b-5">852</h5>
                                    <small>Following</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">13k</h5>
                                    <small>Followers</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">234</h5>
                                    <small>Post</small>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p>michael@gmail.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Wordpress</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML 5</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Angular</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
