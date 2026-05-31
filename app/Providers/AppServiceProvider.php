<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        ResetPassword::createUrlUsing(function (object $notifiable, string $token) {
            return config('app.frontend_url')."/password-reset/$token?email={$notifiable->getEmailForPasswordReset()}";
        });
    }


    protected function authenticated(Request $request, $user)
{
    if ($user->role->name === 'Admin') {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role->name === 'Manager') {
        return redirect()->route('manager.dashboard');
    } elseif ($user->role->name === 'User') {
        return redirect()->route('user.dashboard');
    } elseif ($user->role->name === 'Editor') {
        return redirect()->route('editor.dashboard');
    } elseif ($user->role->name === 'Viewer') {
        return redirect()->route('viewer.dashboard');
    }

    return redirect('/home');
}

}
