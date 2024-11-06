<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="{{ url('/teacher/dashboard') }}">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">{{ trans('main_trans.Dashboard') }}</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ trans('main_trans.Programname') }} </li>

        <!-- الاقسام-->
        <li>
            <a href="{{ route('sections') }}"><i class="fas fa-chalkboard"></i><span
                    class="right-nav-text">الاقسام</span></a>
        </li>

        <!-- الطلاب-->
        <li>
            <a href="{{ route('teacher.student.index') }}"><i class="fas fa-user-graduate"></i><span
                    class="right-nav-text">الطلاب</span></a>
        </li>

        <!-- zoom -->
        <li>
            <a href="{{ route('online_sessions.index') }}">
                <div class="pull-left"><i class="fas fa-chalkboard"></i><span class="right-nav-text">zoom </span></div>

                <div class="clearfix"></div>
            </a>


        </li>
        <!-- الاختبارات-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i><span class="right-nav-text">الاختبارات</span>
                </div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{ route('quizzes.index') }}">قائمة الاختبارات</a></li>
                <li><a href="{{ route('quizzes.question_bank.create') }}">بنك الاسئله </a></li>
                <li><a href="#">قائمة الاسئلة</a></li>
            </ul>

        </li>
        <!-- المجموعات-->
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#groups_menu">
                <div class="pull-left"><i class="fas fa-chalkboard"></i><span class="right-nav-text">المجموعات</span>
                </div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="groups_menu" class="collapse" data-parent="#sidebarnav">

                <li><a href="{{ route('teacher.groups.index') }}">كل المجموعات</a></li>

                <li><a href="{{ route('teacher.groups.create') }}">اضافة مجموعة</a></li>

            </ul>

        </li>
        <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#packages_menu">
                <div class="pull-left"><i class="fas fa-package"></i><span class="right-nav-text">الباقات</span>
                </div>
                <div class="pull-right"><i class="ti-plus"></i></div>
                <div class="clearfix"></div>
            </a>
            <ul id="packages_menu" class="collapse" data-parent="#sidebarnav">
                <li><a href="{{ route('teacher.package.index') }}">قائمة الباقات</a></li>
                <li><a href="{{ route('teacher.package.create') }}">اضافة باقه </a></li>
                <li><a href="#">قائمة الاشتراكات</a></li>
            </ul>

        </li>


        <!-- الملف الشخصي-->
        <li>
            <a href="{{ route('profile.show') }}"><i class="fas fa-id-card-alt"></i><span class="right-nav-text">الملف
                    الشخصي</span></a>
        </li>

    </ul>
</div>
