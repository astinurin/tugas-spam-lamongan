    <?php
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\Admin\DashboardController;
    use App\Http\Controllers\Admin\PelangganController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Auth;

    // Halaman template
    Route::get('/', function () {
        return view('landingpage');
    });

    // Auth routes
    Route::prefix('auth')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
        Route::post('/login', [AuthController::class, 'login'])->name('login');

        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
        Route::post('/register', [AuthController::class, 'register'])->name('register');

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    });

    // Group routes dengan middleware auth
    Route::middleware('auth')->group(function () {
        // Admin routes dengan role middleware
        Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            // Route resource pelanggan
            Route::resource('/pelanggan', PelangganController::class);
        });

        // User routes dengan role middleware
        Route::prefix('user')->name('user.')->middleware('role:user')->group(function () {
            Route::get('/dashboard', function () {
                return view('pages.user.dashboard');
            })->name('dashboard');
        });
    });

