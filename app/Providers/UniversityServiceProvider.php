<?php

namespace App\Providers;

use App\Contracts\AcademicInformationContract;
use App\Contracts\Admin\HomeContract;
use App\Contracts\AuthContract;
use App\Contracts\ChooseProgramContract;
use App\Contracts\DocumentContract;
use App\Contracts\FeeChalanContract;
use App\Contracts\PdfContract;
use App\Contracts\PersonalInformationContract;
use App\Contracts\UserContract;
use App\Models\FeeChalan;
use App\Services\AcademicInformationService;
use App\Services\Admin\HomeService;
use App\Services\AuthService;
use App\Services\ChooseProgramService;
use App\Services\DocumentService;
use App\Services\FeeChalanService;
use App\Services\PdfService;
use App\Services\PersonalInformationService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class UniversityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            UserContract::class,
            function ($app) {
                return $app->make(UserService::class);
            }
        );
        $this->app->bind(
            PersonalInformationContract::class,
            function ($app) {
                return $app->make(PersonalInformationService::class);
            }
        );
        $this->app->bind(
            AcademicInformationContract::class,
            function ($app) {
                return $app->make(AcademicInformationService::class);
            }
        );
        $this->app->bind(
            AuthContract::class,
            function ($app) {
                return $app->make(AuthService::class);
            }
        );
        $this->app->bind(
            DocumentContract::class,
            function ($app) {
                return $app->make(DocumentService::class);
            }
        );
        $this->app->bind(
            ChooseProgramContract::class,
            function ($app) {
                return $app->make(ChooseProgramService::class);
            }
        );
        $this->app->bind(
            FeeChalanContract::class,
            function ($app) {
                return $app->make(FeeChalanService::class);
            }
        );
        $this->app->bind(
            PdfContract::class,
            function ($app) {
                return $app->make(PdfService::class);
            }
        );
        $this->app->bind(
            HomeContract::class,
            function ($app) {
                return $app->make(HomeService::class);
            }
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
