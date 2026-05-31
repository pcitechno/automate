<?php


use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PaymentCalculationController;
use App\Http\Controllers\RecoveryController;
use App\Http\Controllers\StopPaymentController;
use App\Http\Controllers\DoReportController;
use App\Http\Controllers\BrokerRegisterController;
use App\Http\Controllers\FinalCMCommissionController;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\CircularCommissionController;

use App\Http\Controllers\ComingController;
use App\Http\Controllers\DeleteAllRecoveriesController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EditorController;
use App\Http\Controllers\ViewerController;
use App\Http\Controllers\GoogleController;


use App\Models\User;
use App\Models\Role;






Route::get('/google-index', [GoogleController::class, 'index'])->name('google.index');

// Broker Register routes
Route::get('/broker', [BrokerRegisterController::class, 'broker'])->name('broker.index');
Route::get('/export-brokers', [BrokerRegisterController::class, 'export']);
Route::post('/import-brokers', [BrokerRegisterController::class, 'import'])->name('import-brokers');
Route::post('/delete-all', [BrokerRegisterController::class, 'deleteAll'])->name('delete-all');





use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/export-recoveries', [RecoveryController::class, 'export'])->name('export.recoveries');



Route::get('/search', [CommissionController::class, 'search'])->name('search');



Route::post('/delete-recoveries', [DeleteAllRecoveriesController::class, 'deleteAll'])->name('delete.recoveries');
// routes/web.php
Route::delete('/stop-payments', [StopPaymentController::class, 'destroyAll'])->name('stop-payments.destroyAll');


Route::get('/login', function () {
    return view('/login'); // Use 'import' without a leading slash
});


Route::get('/home1', function () {
    return view('/home1'); // Use 'import' without a leading slash
});


Route::get('/home2', function () {
    return view('/home2'); // Use 'import' without a leading slash
});


Route::get('/home3', function () {
    return view('/home3'); // Use 'import' without a leading slash
});


Route::get('/home4', function () {
    return view('/home4'); // Use 'import' without a leading slash
});


Route::get('/import-data', function () {
    return view('/import-data'); // Use 'import' without a leading slash
});



Route::post('/stop-payments', [StopPaymentController::class, 'store'])->name('stop-payments.store');
Route::delete('/stop-payments/{id}', [StopPaymentController::class, 'destroy'])->name('stop-payments.destroy');
Route::delete('/stop-payments/{stop_payment}', [StopPaymentController::class, 'destroy'])->name('stop-payments.destroy');
Route::delete('/stop-payments/{stop_payment}', [StopPaymentController::class, 'destroy'])->name('stop-payments.destroy');


Route::get('/', function () {
    return view('home'); // Your custom home view file
})->name('home');


Route::get('/import', [CircularCommissionController::class, 'import'])->name('import.view');
// Route::post('/import', [CircularCommissionController::class, 'login'])->name('import.view');


// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Payment routes
Route::get('import-payments', [PaymentController::class, 'importForm']);
Route::post('import-payments', [PaymentController::class, 'import'])->name('import');
Route::get('/import-form', [PaymentController::class, 'importForm']);
Route::post('update-final-payable', [PaymentController::class, 'updateFinalPayableAmount'])->name('update.payable');

// Data routes
Route::get('/data', [DataController::class, 'index']);

// Payment calculation
Route::get('/calculate-payments', [PaymentCalculationController::class, 'calculateAndStore']);

// Recovery routes
Route::get('/upload-recovery', function () {
    return view('recovery');
});
Route::post('/import-recovery', [RecoveryController::class, 'import'])->name('import.recovery');
Route::get('/recoveries', [RecoveryController::class, 'index'])->name('recoveries.index');
Route::resource('recoveries', RecoveryController::class);

// Stop payments routes
Route::get('/stop-payments', [StopPaymentController::class, 'index']);
Route::post('/stop-payments/import', [StopPaymentController::class, 'import'])->name('stop-payments.import');
Route::get('/stop-payments/export', [StopPaymentController::class, 'export'])->name('stop-payments.export');
Route::post('/stop-payments', [StopPaymentController::class, 'store'])->name('stop-payments.store');
Route::resource('stop-payments', StopPaymentController::class);
Route::delete('/stop-payments/{stop_payment}', [StopPaymentController::class, 'destroy'])->name('stop-payments.destroy');





// Do Report routes
Route::get('/doreports', [DoReportController::class, 'index']);
Route::post('/doreports/import', [DoReportController::class, 'import'])->name('doreports.import');
Route::get('/doreports/export', [DoReportController::class, 'export'])->name('doreports.export');

// Broker Register routes
Route::get('/brokers', [BrokerRegisterController::class, 'index'])->name('broker.index');
Route::get('/export-brokers', [BrokerRegisterController::class, 'export']);
Route::post('/import-brokers', [BrokerRegisterController::class, 'import'])->name('import-brokers');
Route::post('/delete-all', [BrokerRegisterController::class, 'deleteAll'])->name('delete-all');
// Route::post('/delete-all', [BrokerRegisterController::class, 'deleteAll'])
//     ->middleware('auth', 'role:admin')
//     ->name('delete-all');



// Final CM Commission routes
Route::get('commission', [FinalCMCommissionController::class, 'index'])->name('final_c_m_commissions.index');
Route::post('commission/import', [FinalCMCommissionController::class, 'import'])->name('final_cm_commission.import');

// BM Commission routes
Route::post('/importBMCommission', [ImportExportController::class, 'importBMCommission'])->name('importBMCommission');
Route::get('/import-export', [ImportExportController::class, 'index'])->name('import-export');

// Circular Commission routes
Route::get('/import', [CircularCommissionController::class, 'importView'])->name('import.view');
Route::post('/import', [CircularCommissionController::class, 'import'])->name('import');
Route::get('/export', [CircularCommissionController::class, 'export'])->name('export');

// Coming soon routes
Route::get('/coming', function () {
    return view('coming');
})->name('coming');
Route::get('/coming1', function () {
    return view('coming1');
})->name('coming1');
Route::get('/coming2', function () {
    return view('coming2');
})->name('coming2');
Route::post('/coming2', [ComingController::class, 'handleRequest']);

// Additional import routes
Route::get('/import-cir', [CircularCommissionController::class, 'importcir'])->name('import-cir');
Route::get('/import-bm', [ImportExportController::class, 'importbm'])->name('import-bm');
Route::get('/import-cm', [FinalCMCommissionController::class, 'importcm'])->name('import-cm');


// Route::get('admin/views/import-data', [CommissionController::class, 'import-data'])->name('import-data');
Route::get('/admin/views/import-data', function () {
    return view('/admin/views/import-data'); // Use 'import' without a leading slash
});




// Final CM Commission routes
Route::get('/admin/views', [FinalCMCommissionController::class, '/admin/views/index'])->name('/admin/views/final_c_m_commissions.index');
Route::post('/admin/views/commission/import', [FinalCMCommissionController::class, 'import'])->name('final_cm_commission.import');


//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {

    if (
        $request->email == 'admin@admin.com' &&
        $request->password == 'Admin@123#'
    ) {
        return redirect('/');
    }

    return back()->with('error', 'Invalid Login');
});