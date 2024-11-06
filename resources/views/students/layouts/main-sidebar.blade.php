<!-- Left Sidebar start-->
<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg" style="">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="{{ route('student.dashboard.home') }}">
                    <div class="pull-left"><i class="ti-home"></i><span
                            class="right-nav-text">{{ trans('main_trans.Dashboard') }}</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <!-- menu title -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ trans('main_trans.Programname') }}
            </li>


            <!-- الامتحانات-->
            <li>
                <a href="{{ route('student.dashboard.exams.index') }}"><i class="fas fa-book-open"></i><span
                        class="right-nav-text">الامتحانات</span></a>
            </li>
            <!-- Zoom-->
            <li>
                <a href="{{ route('student.dashboard.sessions.index') }}"><i class="fa fa-file-video-o"></i><span
                        class="right-nav-text">الحصص</span></a>
            </li>

            <!-- Zoom-->
            <li>
                <a href="{{ route('student.dashboard.teachers.index') }}">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span class="right-nav-text">المدرسين</span>
                </a>
            </li>


            <!-- Settings-->
            <li>
                <a href="{{ route('student.dashboard.profile.index') }}"><i class="fas fa-id-card-alt"></i><span
                        class="right-nav-text">الملف الشخصي</span></a>
            </li>

        </ul>
    </div>
</div>
