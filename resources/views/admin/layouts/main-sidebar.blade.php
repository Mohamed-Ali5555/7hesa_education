<!-- Left Sidebar start-->
<div class="side-menu-fixed">

    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <div class="pull-left"><i class="ti-home"></i><span
                            class="right-nav-text">{{ trans('main_trans.Dashboard') }}</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ trans('main_trans.Programname') }} </li>

            <!-- grades-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#grades-menu">
                    <div class="pull-left"><i class="fas fa-school"></i><span
                            class="right-nav-text">{{ trans('main_trans.grades') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="grades-menu" class="collapse" data-parent="#sidebarnav">
                    <li><a href="{{ route('admin.grades.index') }}">{{ trans('main_trans.grades_list') }}</a></li>

                </ul>
            </li>
            <!-- classes-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                    <div class="pull-left"><i class="fa fa-building"></i><span
                            class="right-nav-text">{{ trans('main_trans.classes') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                    <li><a href="{{ route('admin.classrooms.index') }}">{{ trans('main_trans.List_classes') }}</a></li>
                </ul>
            </li>


            <!-- sections-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                    <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span
                            class="right-nav-text">{{ trans('main_trans.sections') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                    <li><a href="{{ route('admin.Sections.index') }}">{{ trans('main_trans.List_sections') }}</a></li>
                </ul>
            </li>


            <!-- students-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu"><i
                        class="fas fa-user-graduate"></i>{{ trans('main_trans.students') }}<div class="pull-right"><i
                            class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="students-menu" class="collapse">
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#Student_information">{{ trans('main_trans.Student_information') }}<div
                                class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Student_information" class="collapse">
                            <li> <a
                                    href="{{ route('admin.student.create') }}">{{ trans('main_trans.add_student') }}</a>
                            </li>
                            <li> <a
                                    href="{{ route('admin.student.index') }}">{{ trans('main_trans.list_students') }}</a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#Students_upgrade">{{ trans('main_trans.Students_Promotions') }}<div
                                class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Students_upgrade" class="collapse">
                            <li> <a
                                    href="{{ route('admin.student.Promotion.index') }}">{{ trans('main_trans.add_Promotion') }}</a>
                            </li>
                            <li> <a
                                    href="{{ route('admin.student.Promotion.create') }}">{{ trans('main_trans.list_Promotions') }}</a>
                            </li>
                        </ul>
                    </li> --}}

                    {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse"
                            data-target="#Graduate students">{{ trans('main_trans.Graduate_students') }}<div
                                class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Graduate students" class="collapse">
                            <li> <a
                                    href="{{ route('admin.student.Graduated.create') }}">{{ trans('main_trans.add_Graduate') }}</a>
                            </li>
                            <li> <a
                                    href="{{ route('admin.student.Graduated.index') }}">{{ trans('main_trans.list_Graduate') }}</a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
            </li>



            <!-- Teachers-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                    <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span
                            class="right-nav-text">{{ trans('main_trans.Teachers') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('admin.Teachers.index') }}">{{ trans('main_trans.List_Teachers') }}</a>
                    </li>
                </ul>
            </li>

            <!-- Coupon -->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#coupon_menu">
                    <div class="pull-left"><i class="fas fa-gift"></i></i><span class="right-nav-text">{{ trans('main_trans.coupon') }}</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="coupon_menu" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('admin.coupon.create') }}">{{ trans('main_trans.added_coupon') }}</a>
                    </li>
                    <li> <a href="{{ route('admin.coupon.index') }}">{{ trans('main_trans.all_coupon') }}</a>
                    </li>

                </ul>
            </li>

        <!-- Coupon -->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#payment_menu">
                <div class="pull-left"><i class="fas fa-gift"></i></i><span class="right-nav-text">{{ trans('main_trans.payment') }}</span>
                </div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="payment_menu" class="collapse" data-parent="#sidebarnav">
               
                <li> <a href="{{ route('admin.payment_details') }}">{{ trans('main_trans.all_payment') }}</a>
                </li>

            </ul>
        </li>

      <!-- package-->
      <li>
        <a href="javascript:void(0);" data-toggle="collapse" data-target="#package-icon">
            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span
                    class="right-nav-text">{{ trans('main_trans.package') }}</span></div>
            <div class="pull-right"><i class="ti-plus"></i></div>
            <div class="clearfix"></div>
        </a>
        <ul id="package-icon" class="collapse" data-parent="#sidebarnav">
            <li> <a href="{{ route('admin.package.index') }}">{{ trans('main_trans.package_list') }}</a> </li>
        </ul>
    </li>
            <!-- Attendance-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                    <div class="pull-left"><i class="fas fa-calendar-alt"></i><span
                            class="right-nav-text">{{ trans('main_trans.Attendance') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('admin.student.Attendance.index') }}">{{ trans('main_trans.students_list') }}</a> </li>
                </ul>
            </li>

            <!-- Subjects-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Subjects">
                    <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">{{ trans('main_trans.Subjects') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Subjects" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('admin.subjects.index') }}">{{ trans('main_trans.Subjects_list') }}</a> </li>
                </ul>
            </li>

            <!-- Quizzes-->
            <li>
                <a href="{{ route('admin.logs.index') }}">
                    <div class="pull-left"><i class="fa fa-history"></i><span class="right-nav-text">{{ trans('main_trans.log') }}</span> </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            {{-- <a href="{{ route('admin.logs.index') }}">
                <div class="pull-left"><i class="ti-history"></i><span
                        class="right-nav-text">حركات السيستم</span>
                </div>
                <div class="clearfix"></div>
            </a> --}}
            {{-- <li> <a href="{{ route('admin.logs.index') }}">حركات السيستم</a> </li> --}}

            {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#log_menu">
                            <div class="pull-left"><i class="fas fa-list"></i><span class="right-nav-text">الاختبارات</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a
            
                    </li> --}}
            <!-- Quizzes-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                    <div class="pull-left"><i class="fas fa-book-open"></i><span
                            class="right-nav-text">الاختبارات</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
                    {{-- <li> <a href="{{ route('admin.qu') }}">قائمة الاختبارات</a> </li> --}}
                    {{-- <li> <a href="{{ route('admin.questions.index') }}">قائمة الاسئلة</a> </li> --}}
                </ul>
            </li>


            <!-- library-->
            {{-- <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                            <div class="pull-left"><i class="fas fa-book"></i><span
                                    class="right-nav-text">{{ trans('main_trans.library') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ route('admin.library.index') }}">قائمة الكتب</a> </li>
                        </ul>
                    </li> --}}


            <!-- Online classes-->
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                    <div class="pull-left"><i class="fas fa-video"></i><span
                            class="right-nav-text">{{ trans('main_trans.Onlineclasses') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('admin.student.online_classes.index') }}">حصص اونلاين مع زوم</a> </li>
                </ul>
            </li>


            <!-- Settings-->
            <li>
                <a href="{{ route('admin.settings.index') }}"><i class="fas fa-cogs"></i><span
                        class="right-nav-text">{{ trans('main_trans.Settings') }} </span></a>
            </li>



            <!-- Users-->
            <li>
                <a href="#">
                    {{-- <a href="{{ route('admin.users.index') }}"> --}}
                    <i class="fas fa-users"></i><span class="right-nav-text">{{ trans('main_trans.Users') }}
                    </span></a>
            </li>
            {{-- <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                    <div class="pull-left"><i class="fas fa-users"></i><span
                            class="right-nav-text">{{ trans('main_trans.Users') }}</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">

                </ul>
            </li> --}}

        </ul>
    </div>

</div>


<!-- Left Sidebar End-->

<!--=================================
