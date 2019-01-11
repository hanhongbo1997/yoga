<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\admin\ClubController;
use App\Http\Controllers\home\VideoController;
use App\Http\Controllers\home\CommentController;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        //共享化数据
        View::share('common_clubsort',ClubController::getPidClub(0));
        View::share('common_video',VideoController::getPidVideos(0));
        View::share('common_comment',CommentController::getComment(0));
        \Carbon\Carbon::setLocale('zh');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
