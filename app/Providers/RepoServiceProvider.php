<?php

namespace App\Providers;

use App\Repository\{
    QuizzRepository,
    CouponRepository,
    LibraryRepository,
    StudentRepository,
    SubjectRepository,
    TeacherRepository,
    QuestionRepository,
    AttendanceRepository,
    StudentGraduatedRepository
};
use App\Interfaces\{
    CouponInterface,
    QuestionRepositoryInterface,
    QuizzRepositoryInterface,
    SubjectRepositoryInterface,
    AttendanceRepositoryInterface,
    StudentRepositoryInterface,
    StudentGraduatedRepositoryInterface,
    TeacherRepositoryInterface,
    LibraryRepositoryInterface
};
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind(TeacherRepositoryInterface::class, TeacherRepository::class);
        $this->app->bind(StudentRepositoryInterface::class, StudentRepository::class);

        $this->app->bind(StudentGraduatedRepositoryInterface::class, StudentGraduatedRepository::class);


        $this->app->bind(AttendanceRepositoryInterface::class, AttendanceRepository::class);
        $this->app->bind(SubjectRepositoryInterface::class, SubjectRepository::class);
        $this->app->bind(QuizzRepositoryInterface::class, QuizzRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class, QuestionRepository::class);
        $this->app->bind(LibraryRepositoryInterface::class, LibraryRepository::class);

        $this->app->bind(CouponInterface::class, CouponRepository::class);

    }


    public function boot()
    {
        //
    }
}
