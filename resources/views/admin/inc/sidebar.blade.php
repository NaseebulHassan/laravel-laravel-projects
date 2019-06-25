<div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
               
                <li>
                    <a href="#"><i class="fa-tachometer-alt-average"></i> Dashboard</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-address-book fa-fw"></i>Student Registration<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('registration')}}"><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Student Registration</a>
                        </li>
                        <li>
                            <a href="{{ url('Qualification') }}"><i class="fa fa-angle-double-right"> </i>&nbsp;&nbsp;Qualification</a>
                        </li>
                        <li>
                            <a href="{{ url('step3')}}"><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Personal Info</a>
                        </li>
                        <li>
                            <a href="{{ url('step4') }}"><i class="fa fa-angle-double-right"></i>&nbsp;&nbsp;Sibling Detail</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="{{ url('course') }}"><i class="fa fa-table fa-fw"></i> Add Cources</a>
                </li>
                <li>
                    <a href="{{url('instructor')}}" ><i class="fas fa-user-graduate"></i> Add Instructor </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-wrench fa-fw"></i>Enrollment<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{url('studentEnroll')}}"><i class="fa fa-angle-double-right"></i> Student Enrollment</a>
                        </li>
                        <li>
                            <a href="{{url('offeredCourses')}}"><i class="fa fa-angle-double-right"></i>   All Offered Courses</a>
                        </li>
                      
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Offered Courses<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right"></i> Second Level Item</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-double-right"></i> Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#"><i class="fa fa-angle-double-right"></i> Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-double-right"></i> Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-double-right"></i> Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-angle-double-right"></i> Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level -->
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
                <li>
                    <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="blank.html"><i class="fa fa-angle-double-right"></i>Blank Page</a>
                        </li>
                        <li>
                            <a href="login.html"><i class="fa fa-angle-double-right"></i>Login Page</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->