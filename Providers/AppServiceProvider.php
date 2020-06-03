<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Billing\PaymentGateway;
use App\Billing\PayPaymentGateway;
use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PayPaymentGateway::class, function($app){
            return new PayPaymentGateway('usd');
        });

        $this->app->singleton(PaymentGateway::class, function($app){
            return new PaymentGateway('USD');
        });

        $this->app->singleton(PaymentGatewayContract::class, function($app){
            if(request()->has('bank')){
                return new BankPaymentGateway('eur');
            }else{
                return new CreditPaymentGateway('tk');
            }   
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
