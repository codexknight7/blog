<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // here we ensure that every view will have access 
        // to archives() method of the Post
        view()->composer('layouts.archives', function ($view) {

            $archives = \App\Models\Post::archives();
            // return only the tags, for which posts exist
            $tags = \App\Models\Tag::has('posts')->get();

            $view->with(compact('archives','tags'));

        });
    }
}
