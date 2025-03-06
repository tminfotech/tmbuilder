<?php
 
namespace TMInfotech\TMBuilder;
 
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;
 
class BuilderServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    public function boot(): void
{
    $this->publishesMigrations([
        __DIR__.'/../database/migrations' => database_path('migrations'),
    ]);
}
}