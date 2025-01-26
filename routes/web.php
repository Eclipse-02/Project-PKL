<?php

// Default route files

use App\Http\Controllers\AccountController as DashboardAccountController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Master controller
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Master\CoyController;
use App\Http\Controllers\Master\EduController;
use App\Http\Controllers\Master\JobController;
use App\Http\Controllers\Master\ZipController;
use App\Http\Controllers\Master\AreaController;
use App\Http\Controllers\Master\BankController;
use App\Http\Controllers\Master\KotaController;
use App\Http\Controllers\Master\UserController;
use App\Http\Controllers\Master\BranchController;
use App\Http\Controllers\Finance\PeriodController;
use App\Http\Controllers\Master\CountryController;
use App\Http\Controllers\Master\PackageController;
use App\Http\Controllers\Master\VaccineController;
use App\Http\Controllers\Finance\AccountController;
use App\Http\Controllers\Master\EmployeeController;
use App\Http\Controllers\Master\PositionController;
use App\Http\Controllers\Master\ProvinsiController;
use App\Http\Controllers\Master\RelationController;
use App\Http\Controllers\Master\SupplierController;
use App\Http\Controllers\Master\KecamatanController;
use App\Http\Controllers\Master\KelurahanController;

// Finance controller
use App\Http\Controllers\Master\SupplierAccController;
use App\Http\Controllers\Master\PackageDetailController;
use App\Http\Controllers\Master\RegisterPackageController;
use App\Http\Controllers\Master\SupplierSubTypeController;
use App\Http\Controllers\Finance\Transaction\InvoiceController;
use App\Http\Controllers\Finance\Transaction\CorrectController;
use App\Http\Controllers\Finance\Transaction\PCashController;
use App\Http\Controllers\Finance\Transaction\ReceiveController;
use App\Http\Controllers\Finance\Transaction\TransactionDetailController;
use App\Http\Controllers\Finance\Transaction\Parameter\TransactionHeaderController;
use App\Http\Controllers\Finance\Transaction\Parameter\TransactionController;
use App\Http\Controllers\RegisterEventPackageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// currently Logged in user can access 
Route::middleware(['auth', 'auth.session'])->group(function () {

    // check if password_expired
    // Route::middleware('password_expired')->group(function () {

        Route::group(['prefix' => 'account'], function () {
            Route::get('overview', [DashboardAccountController::class, 'overview'])->name('dashboard.account.overview');
            Route::get('setting', [DashboardAccountController::class, 'setting'])->name('dashboard.account.setting');
            Route::match(['put', 'patch'],'/{id}', [DashboardAccountController::class, 'updatePassword'])->name('dashboard.account.updatepassword');
        });

        // user with 'office' role can access
        Route::middleware('role:office')->group(function () {

            Route::group(['prefix' => 'setup'], function () {

                // coy scaffold
                Route::group(['prefix' => 'companies'], function () {
                    Route::get('/', [CoyController::class, 'index'])->name('companies.index')->middleware('permission:company-read');
                    Route::post('/', [CoyController::class, 'store'])->name('companies.store');
                    Route::get('/create', [CoyController::class, 'create'])->name('companies.create')->middleware('permission:company-create');
                    Route::get('/{coy}', [CoyController::class, 'show'])->name('companies.show')->middleware('permission:company-read');
                    Route::match(['put', 'patch'],'/{coy}', [CoyController::class, 'update'])->name('companies.update');
                    Route::delete('/{coy}', [CoyController::class, 'destroy'])->name('companies.destroy')->middleware('permission:company-delete');
                    Route::get('/{coy}/edit', [CoyController::class, 'edit'])->name('companies.edit')->middleware('permission:company-update');
                });

                Route::group(['prefix' => 'locations'], function () {

                    // provinsi scaffold
                    Route::group(['prefix' => 'provinsis'], function () {
                        Route::get('/', [ProvinsiController::class, 'index'])->name('provinsis.index')->middleware('permission:provinsi-read');
                        Route::post('/', [ProvinsiController::class, 'store'])->name('provinsis.store');
                        Route::get('/create', [ProvinsiController::class, 'create'])->name('provinsis.create')->middleware('permission:provinsi-create');
                        Route::get('/{provinsi}', [ProvinsiController::class, 'show'])->name('provinsis.show')->middleware('permission:provinsi-read');
                        Route::match(['put', 'patch'],'/{provinsi}', [ProvinsiController::class, 'update'])->name('provinsis.update');
                        Route::delete('/{provinsi}', [ProvinsiController::class, 'destroy'])->name('provinsis.destroy')->middleware('permission:provinsi-delete');
                        Route::get('/{provinsi}/edit', [ProvinsiController::class, 'edit'])->name('provinsis.edit')->middleware('permission:provinsi-update');
                    });

                    // kota scaffold
                    Route::group(['prefix' => 'kotas'], function () {
                        Route::get('/', [KotaController::class, 'index'])->name('kotas.index')->middleware('permission:kota-read');
                        Route::post('/', [KotaController::class, 'store'])->name('kotas.store');
                        Route::get('/create', [KotaController::class, 'create'])->name('kotas.create')->middleware('permission:kota-create');
                        Route::get('/{kota}', [KotaController::class, 'show'])->name('kotas.show')->middleware('permission:kota-read');
                        Route::match(['put', 'patch'],'/{kota}', [KotaController::class, 'update'])->name('kotas.update');
                        Route::delete('/{kota}', [KotaController::class, 'destroy'])->name('kotas.destroy')->middleware('permission:kota-delete');
                        Route::get('/{kota}/edit', [KotaController::class, 'edit'])->name('kotas.edit')->middleware('permission:kota-update');
                    });

                    // kecamatan scaffold
                    Route::group(['prefix' => 'kecamatans'], function () {
                        Route::get('/', [KecamatanController::class, 'index'])->name('kecamatans.index')->middleware('permission:kecamatan-read');
                        Route::post('/', [KecamatanController::class, 'store'])->name('kecamatans.store');
                        Route::get('/create', [KecamatanController::class, 'create'])->name('kecamatans.create')->middleware('permission:kecamatan-create');
                        Route::get('/{kecamatan}', [KecamatanController::class, 'show'])->name('kecamatans.show')->middleware('permission:kecamatan-read');
                        Route::match(['put', 'patch'],'/{kecamatan}', [KecamatanController::class, 'update'])->name('kecamatans.update');
                        Route::delete('/{kecamatan}', [KecamatanController::class, 'destroy'])->name('kecamatans.destroy')->middleware('permission:kecamatan-delete');
                        Route::get('/{kecamatan}/edit', [KecamatanController::class, 'edit'])->name('kecamatans.edit')->middleware('permission:kecamatan-update');
                    });

                    // kelurahan scaffold
                    Route::group(['prefix' => 'kelurahans'], function () {
                        Route::get('/', [KelurahanController::class, 'index'])->name('kelurahans.index')->middleware('permission:kelurahan-read');
                        Route::post('/', [KelurahanController::class, 'store'])->name('kelurahans.store');
                        Route::get('/create', [KelurahanController::class, 'create'])->name('kelurahans.create')->middleware('permission:kelurahan-create');
                        Route::get('/{kelurahan}', [KelurahanController::class, 'show'])->name('kelurahans.show')->middleware('permission:kelurahan-read');
                        Route::match(['put', 'patch'],'/{kelurahan}', [KelurahanController::class, 'update'])->name('kelurahans.update');
                        Route::delete('/{kelurahan}', [KelurahanController::class, 'destroy'])->name('kelurahans.destroy')->middleware('permission:kelurahan-delete');
                        Route::get('/{kelurahan}/edit', [KelurahanController::class, 'edit'])->name('kelurahans.edit')->middleware('permission:kelurahan-update');
                    });

                    // zip scaffold
                    Route::group(['prefix' => 'zips'], function () {
                        Route::get('/', [ZipController::class, 'index'])->name('zips.index')->middleware('permission:zip-read');
                        Route::post('/', [ZipController::class, 'store'])->name('zips.store');
                        Route::get('/create', [ZipController::class, 'create'])->name('zips.create')->middleware('permission:zip-create');
                        Route::get('/{zip}', [ZipController::class, 'show'])->name('zips.show')->middleware('permission:zip-read');
                        Route::match(['put', 'patch'],'/{zip}', [ZipController::class, 'update'])->name('zips.update');
                        Route::delete('/{zip}', [ZipController::class, 'destroy'])->name('zips.destroy')->middleware('permission:zip-delete');
                        Route::get('/{zip}/edit', [ZipController::class, 'edit'])->name('zips.edit')->middleware('permission:zip-update');
                    });

                });

                Route::group(['prefix' => 'users'], function () {

                    // position scaffold
                    Route::group(['prefix' => 'positions'], function () {
                        Route::get('/', [PositionController::class, 'index'])->name('positions.index')->middleware('permission:position-read');
                        Route::post('/', [PositionController::class, 'store'])->name('positions.store');
                        Route::get('/create', [PositionController::class, 'create'])->name('positions.create')->middleware('permission:position-create');
                        Route::get('/{position}', [PositionController::class, 'show'])->name('positions.show')->middleware('permission:position-read');
                        Route::match(['put', 'patch'],'/{position}', [PositionController::class, 'update'])->name('positions.update');
                        Route::delete('/{position}', [PositionController::class, 'destroy'])->name('positions.destroy')->middleware('permission:position-delete');
                        Route::get('/{position}/edit', [PositionController::class, 'edit'])->name('positions.edit')->middleware('permission:position-update');
                    });

                    // employee scaffold
                    Route::group(['prefix' => 'employees'], function () {
                        Route::get('/', [EmployeeController::class, 'index'])->name('employees.index')->middleware('permission:employee-read');
                        Route::post('/', [EmployeeController::class, 'store'])->name('employees.store');
                        Route::get('/create', [EmployeeController::class, 'create'])->name('employees.create')->middleware('permission:employee-create');
                        Route::get('/{employee}', [EmployeeController::class, 'show'])->name('employees.show')->middleware('permission:employee-read');
                        Route::match(['put', 'patch'],'/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
                        Route::delete('/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy')->middleware('permission:employee-delete');
                        Route::get('/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit')->middleware('permission:employee-update');
                    });

                    // user scaffold
                    Route::group(['prefix' => 'user'], function () {
                        Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('permission:user-read');
                        Route::post('/', [UserController::class, 'store'])->name('users.store');
                        Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('permission:user-create');
                        Route::get('/{user}', [UserController::class, 'show'])->name('users.show')->middleware('permission:user-read');
                        Route::match(['put', 'patch'],'/{user}', [UserController::class, 'update'])->name('users.update');
                        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('permission:user-delete');
                        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:user-update');
                    });

                });

                // area scaffold
                Route::group(['prefix' => 'areas'], function () {
                    Route::get('/', [AreaController::class, 'index'])->name('areas.index')->middleware('permission:area-read');
                    Route::post('/', [AreaController::class, 'store'])->name('areas.store');
                    Route::get('/create', [AreaController::class, 'create'])->name('areas.create')->middleware('permission:area-create');
                    Route::get('/{area}', [AreaController::class, 'show'])->name('areas.show')->middleware('permission:area-read');
                    Route::match(['put', 'patch'],'/{area}', [AreaController::class, 'update'])->name('areas.update');
                    Route::delete('/{area}', [AreaController::class, 'destroy'])->name('areas.destroy')->middleware('permission:area-delete');
                    Route::get('/{area}/edit', [AreaController::class, 'edit'])->name('areas.edit')->middleware('permission:area-update');
                });

                // branch scaffold
                Route::group(['prefix' => 'branches'], function () {
                    Route::get('/', [BranchController::class, 'index'])->name('branches.index')->middleware('permission:branch-read');
                    Route::post('/', [BranchController::class, 'store'])->name('branches.store');
                    Route::get('/create', [BranchController::class, 'create'])->name('branches.create')->middleware('permission:branch-create');
                    Route::get('/{branch}', [BranchController::class, 'show'])->name('branches.show')->middleware('permission:branch-read');
                    Route::match(['put', 'patch'],'/{branch}', [BranchController::class, 'update'])->name('branches.update');
                    Route::delete('/{branch}', [BranchController::class, 'destroy'])->name('branches.destroy')->middleware('permission:branch-delete');
                    Route::get('/{branch}/edit', [BranchController::class, 'edit'])->name('branches.edit')->middleware('permission:branch-update');
                });

                Route::group(['prefix' => 'registrations'], function () {

                    // vaccine scaffold
                    Route::group(['prefix' => 'vaccines'], function () {
                        Route::get('/', [VaccineController::class, 'index'])->name('vaccines.index')->middleware('permission:vaccine-read');
                        Route::post('/', [VaccineController::class, 'store'])->name('vaccines.store');
                        Route::get('/create', [VaccineController::class, 'create'])->name('vaccines.create')->middleware('permission:vaccine-create');
                        Route::get('/{vaccine}', [VaccineController::class, 'show'])->name('vaccines.show')->middleware('permission:vaccine-read');
                        Route::match(['put', 'patch'],'/{vaccine}', [VaccineController::class, 'update'])->name('vaccines.update');
                        Route::delete('/{vaccine}', [VaccineController::class, 'destroy'])->name('vaccines.destroy')->middleware('permission:vaccine-delete');
                        Route::get('/{vaccine}/edit', [VaccineController::class, 'edit'])->name('vaccines.edit')->middleware('permission:vaccine-update');
                    });

                    // job scaffold
                    Route::group(['prefix' => 'jobs'], function () {
                        Route::get('/', [JobController::class, 'index'])->name('jobs.index')->middleware('permission:job-read');
                        Route::post('/', [JobController::class, 'store'])->name('jobs.store');
                        Route::get('/create', [JobController::class, 'create'])->name('jobs.create')->middleware('permission:job-create');
                        Route::get('/{job}', [JobController::class, 'show'])->name('jobs.show')->middleware('permission:job-read');
                        Route::match(['put', 'patch'],'/{job}', [JobController::class, 'update'])->name('jobs.update');
                        Route::delete('/{job}', [JobController::class, 'destroy'])->name('jobs.destroy')->middleware('permission:job-delete');
                        Route::get('/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit')->middleware('permission:job-update');
                    });

                    // edu scaffold
                    Route::group(['prefix' => 'educations'], function () {
                        Route::get('/', [EduController::class, 'index'])->name('educations.index')->middleware('permission:education-read');
                        Route::post('/', [EduController::class, 'store'])->name('educations.store');
                        Route::get('/create', [EduController::class, 'create'])->name('educations.create')->middleware('permission:education-create');
                        Route::get('/{edu}', [EduController::class, 'show'])->name('educations.show')->middleware('permission:education-read');
                        Route::match(['put', 'patch'],'/{edu}', [EduController::class, 'update'])->name('educations.update');
                        Route::delete('/{edu}', [EduController::class, 'destroy'])->name('educations.destroy')->middleware('permission:education-delete');
                        Route::get('/{edu}/edit', [EduController::class, 'edit'])->name('educations.edit')->middleware('permission:education-update');
                    });

                    // country scaffold
                    Route::group(['prefix' => 'countries'], function () {
                        Route::get('/', [CountryController::class, 'index'])->name('countries.index')->middleware('permission:country-read');
                        Route::post('/', [CountryController::class, 'store'])->name('countries.store');
                        Route::get('/create', [CountryController::class, 'create'])->name('countries.create')->middleware('permission:country-create');
                        Route::get('/{country}', [CountryController::class, 'show'])->name('countries.show')->middleware('permission:country-read');
                        Route::match(['put', 'patch'],'/{country}', [CountryController::class, 'update'])->name('countries.update');
                        Route::delete('/{country}', [CountryController::class, 'destroy'])->name('countries.destroy')->middleware('permission:country-delete');
                        Route::get('/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit')->middleware('permission:country-update');
                    });

                    // relation scaffold
                    Route::group(['prefix' => 'relations'], function () {
                        Route::get('/', [RelationController::class, 'index'])->name('relations.index')->middleware('permission:relation-read');
                        Route::post('/', [RelationController::class, 'store'])->name('relations.store');
                        Route::get('/create', [RelationController::class, 'create'])->name('relations.create')->middleware('permission:relation-create');
                        Route::get('/{relation}', [RelationController::class, 'show'])->name('relations.show')->middleware('permission:relation-read');
                        Route::match(['put', 'patch'],'/{relation}', [RelationController::class, 'update'])->name('relations.update');
                        Route::delete('/{relation}', [RelationController::class, 'destroy'])->name('relations.destroy')->middleware('permission:relation-delete');
                        Route::get('/{relation}/edit', [RelationController::class, 'edit'])->name('relations.edit')->middleware('permission:relation-update');
                    });

                });

                Route::group(['prefix' => 'banks'], function () {

                    // bank scaffold
                    Route::group(['prefix' => 'bank'], function () {
                        Route::get('/', [BankController::class, 'index'])->name('banks.index')->middleware('permission:bank-read');
                        Route::post('/', [BankController::class, 'store'])->name('banks.store');
                        Route::get('/create', [BankController::class, 'create'])->name('banks.create')->middleware('permission:bank-create');
                        Route::get('/{bank}', [BankController::class, 'show'])->name('banks.show')->middleware('permission:bank-read');
                        Route::match(['put', 'patch'],'/{bank}', [BankController::class, 'update'])->name('banks.update');
                        Route::delete('/{bank}', [BankController::class, 'destroy'])->name('banks.destroy')->middleware('permission:bank-delete');
                        Route::get('/{bank}/edit', [BankController::class, 'edit'])->name('banks.edit')->middleware('permission:bank-update');
                    });

                });

                Route::group(['prefix' => 'suppliers'], function () {

                    // suppliersubtype scaffold
                    Route::group(['prefix' => 'subtypes'], function () {
                        Route::get('/', [SupplierSubTypeController::class, 'index'])->name('suppliersubtypes.index')->middleware('permission:supplier-sub-type-read');
                        Route::post('/', [SupplierSubTypeController::class, 'store'])->name('suppliersubtypes.store');
                        Route::get('/create', [SupplierSubTypeController::class, 'create'])->name('suppliersubtypes.create')->middleware('permission:supplier-sub-type-create');
                        Route::get('/{suppliersubtype}', [SupplierSubTypeController::class, 'show'])->name('suppliersubtypes.show')->middleware('permission:supplier-sub-type-read');
                        Route::match(['put', 'patch'],'/{suppliersubtype}', [SupplierSubTypeController::class, 'update'])->name('suppliersubtypes.update');
                        Route::delete('/{suppliersubtype}', [SupplierSubTypeController::class, 'destroy'])->name('suppliersubtypes.destroy')->middleware('permission:supplier-sub-type-delete');
                        Route::get('/{suppliersubtype}/edit', [SupplierSubTypeController::class, 'edit'])->name('suppliersubtypes.edit')->middleware('permission:supplier-sub-type-update');
                    });

                });

            });

            Route::group(['prefix' => 'suppliers'], function () {

                // supplier scaffold
                Route::group(['prefix' => 'supplier'], function () {
                    Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index')->middleware('permission:supplier-read');
                    Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
                    Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create')->middleware('permission:supplier-create');
                    Route::get('/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show')->middleware('permission:supplier-read');
                    Route::match(['put', 'patch'],'/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
                    Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy')->middleware('permission:supplier-delete');
                    Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit')->middleware('permission:supplier-update');
                });

                // supplieracc scaffold
                Route::group(['prefix' => 'accs'], function () {
                    Route::get('/', [SupplierAccController::class, 'index'])->name('supplieraccs.index')->middleware('permission:supplier-acc-read');
                    Route::post('/', [SupplierAccController::class, 'store'])->name('supplieraccs.store');
                    Route::get('/create', [SupplierAccController::class, 'create'])->name('supplieraccs.create')->middleware('permission:supplier-acc-create');
                    Route::get('/{supplieracc}', [SupplierAccController::class, 'show'])->name('supplieraccs.show')->middleware('permission:supplier-acc-read');
                    Route::match(['put', 'patch'],'/{supplieracc}', [SupplierAccController::class, 'update'])->name('supplieraccs.update');
                    Route::delete('/{supplieracc}', [SupplierAccController::class, 'destroy'])->name('supplieraccs.destroy')->middleware('permission:supplier-acc-delete');
                    Route::get('/{supplieracc}/edit', [SupplierAccController::class, 'edit'])->name('supplieraccs.edit')->middleware('permission:supplier-acc-update');
                });

            });

            Route::group(['prefix' => 'packages'], function () {

                // package scaffold
                Route::group(['prefix' => 'package'], function () {
                    Route::get('/', [PackageController::class, 'index'])->name('packages.index')->middleware('permission:package-read');
                    Route::post('/', [PackageController::class, 'store'])->name('packages.store');
                    Route::get('/create', [PackageController::class, 'create'])->name('packages.create')->middleware('permission:package-create');
                    Route::get('/{package}', [PackageController::class, 'show'])->name('packages.show')->middleware('permission:package-read');
                    Route::match(['put', 'patch'],'/{package}', [PackageController::class, 'update'])->name('packages.update');
                    Route::delete('/{package}', [PackageController::class, 'destroy'])->name('packages.destroy')->middleware('permission:package-delete');
                    Route::get('/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit')->middleware('permission:package-update');
                });

                // packagedetail scaffold
                Route::group(['prefix' => 'packagedetails'], function () {
                    Route::post('/', [PackageDetailController::class, 'store'])->name('packagedetails.store');
                    Route::get('/create/{packageDetail}', [PackageDetailController::class, 'create'])->name('packagedetails.create')->middleware('permission:package-create');
                    Route::get('/{packageDetail}', [PackageDetailController::class, 'show'])->name('packagedetails.show')->middleware('permission:package-read');
                    Route::match(['put', 'patch'],'/{packageDetail}', [PackageDetailController::class, 'update'])->name('packagedetails.update');
                    Route::delete('/{packageDetail}', [PackageDetailController::class, 'destroy'])->name('packagedetails.destroy')->middleware('permission:package-delete');
                });

            });

            Route::group(['prefix' => 'registers'], function () {

                // registerpackage scaffold
                Route::group(['prefix' => 'registerpackages'], function () {
                    Route::get('/', [RegisterPackageController::class, 'index'])->name('registerpackages.index')->middleware('permission:register-package-read');
                    Route::post('/', [RegisterPackageController::class, 'store'])->name('registerpackages.store');
                    Route::get('/create', [RegisterPackageController::class, 'create'])->name('registerpackages.create')->middleware('permission:register-package-create');
                    Route::get('/{registerpackage}', [RegisterPackageController::class, 'show'])->name('registerpackages.show')->middleware('permission:register-package-read');
                    Route::match(['put', 'patch'],'/{registerpackage}', [RegisterPackageController::class, 'update'])->name('registerpackages.update');
                    Route::delete('/{registerpackage}', [RegisterPackageController::class, 'destroy'])->name('registerpackages.destroy')->middleware('permission:register-package-delete');
                    Route::get('/{registerpackage}/edit', [RegisterPackageController::class, 'edit'])->name('registerpackages.edit')->middleware('permission:register-package-update');
                    Route::post('/export', [RegisterPackageController::class, 'export'])->name('registerpackages.export')->middleware('permission:register-package-update');
                });

                // event scaffold
                Route::group(['prefix' => 'events'], function () {
                    Route::get('/', [RegisterEventPackageController::class, 'index'])->name('events.index');
                    Route::post('/', [RegisterEventPackageController::class, 'store'])->name('events.store');
                    Route::get('/create', [RegisterEventPackageController::class, 'create'])->name('events.create');
                    Route::get('/{event}', [RegisterEventPackageController::class, 'show'])->name('events.show');
                    Route::match(['put', 'patch'],'/{event}', [RegisterEventPackageController::class, 'update'])->name('events.update');
                    Route::delete('/{event}', [RegisterEventPackageController::class, 'destroy'])->name('events.destroy');
                    Route::get('/{event}/edit', [RegisterEventPackageController::class, 'edit'])->name('events.edit');
                    Route::post('/export', [RegisterEventPackageController::class, 'export'])->name('events.export');
                });

            });

            /* Finance scaffolds */

            Route::group(['prefix' => 'finances'], function() {

                // accounts scaffold
                Route::group(['prefix' => 'accounts'], function () {
                    Route::get('/', [AccountController::class, 'index'])->name('finances.accounts.index');
                    Route::post('/', [AccountController::class, 'store'])->name('finances.accounts.store');
                    Route::get('/create', [AccountController::class, 'create'])->name('finances.accounts.create');
                    Route::get('/{account}', [AccountController::class, 'show'])->name('finances.accounts.show');
                    Route::match(['put', 'patch'],'/{account}', [AccountController::class, 'update'])->name('finances.accounts.update');
                    Route::delete('/{account}', [AccountController::class, 'destroy'])->name('finances.accounts.destroy');
                    Route::get('/{account}/edit', [AccountController::class, 'edit'])->name('finances.accounts.edit');
                    // Route::post('/export', [AccountController::class, 'export'])->name('finances.accounts.export');
                });

                // periods scaffold
                Route::group(['prefix' => 'periods'], function () {
                    Route::get('/', [PeriodController::class, 'index'])->name('finances.periods.index');
                    Route::post('/', [PeriodController::class, 'store'])->name('finances.periods.store');
                    Route::get('/create', [PeriodController::class, 'create'])->name('finances.periods.create');
                    Route::get('/{period}', [PeriodController::class, 'show'])->name('finances.periods.show');
                    Route::match(['put', 'patch'],'/{period}', [PeriodController::class, 'update'])->name('finances.periods.update');
                    Route::delete('/{period}', [PeriodController::class, 'destroy'])->name('finances.periods.destroy');
                    Route::get('/{period}/edit', [PeriodController::class, 'edit'])->name('finances.periods.edit');
                    // Route::post('/export', [PeriodController::class, 'export'])->name('finances.periods.export');
                });

                // transactions master
                Route::group(['prefix' => 'transactions'], function() {

                    // parameters
                    Route::group(['prefix' => 'parameters'], function () {

                        // headers scaffold
                        Route::group(['prefix' => 'headers'], function () {
                            Route::get('/', [TransactionHeaderController::class, 'index'])->name('finances.transactions.parameters.headers.index');
                            Route::post('/', [TransactionHeaderController::class, 'store'])->name('finances.transactions.parameters.headers.store');
                            Route::get('/create', [TransactionHeaderController::class, 'create'])->name('finances.transactions.parameters.headers.create');
                            Route::get('/{headers}', [TransactionHeaderController::class, 'show'])->name('finances.transactions.parameters.headers.show');
                            Route::match(['put', 'patch'],'/{headers}', [TransactionHeaderController::class, 'update'])->name('finances.transactions.parameters.headers.update');
                            Route::delete('/{headers}', [TransactionHeaderController::class, 'destroy'])->name('finances.transactions.parameters.headers.destroy');
                            Route::get('/{headers}/edit', [TransactionHeaderController::class, 'edit'])->name('finances.transactions.parameters.headers.edit');
                            // Route::post('/export', [TransactionHeaderController::class, 'export'])->name('finances.transactions.parameters.headers.export');
                        });

                        // transactions scaffold
                        Route::group(['prefix' => 'transaction'], function () {
                            Route::get('/', [TransactionController::class, 'index'])->name('finances.transactions.parameters.transaction.index');
                            Route::post('/', [TransactionController::class, 'store'])->name('finances.transactions.parameters.transaction.store');
                            Route::get('/create', [TransactionController::class, 'create'])->name('finances.transactions.parameters.transaction.create');
                            Route::get('/{transaction}', [TransactionController::class, 'show'])->name('finances.transactions.parameters.transaction.show');
                            Route::match(['put', 'patch'],'/{transaction}', [TransactionController::class, 'update'])->name('finances.transactions.parameters.transaction.update');
                            Route::delete('/{transaction}', [TransactionController::class, 'destroy'])->name('finances.transactions.parameters.transaction.destroy');
                            Route::get('/{transaction}/edit', [TransactionController::class, 'edit'])->name('finances.transactions.parameters.transaction.edit');
                            // Route::post('/export', [TransactionController::class, 'export'])->name('finances.transactions.parameters.transaction.export');
                        });

                    });

                    // transactions scaffold
                    Route::group(['prefix' => 'details'], function () {
                        Route::get('/', [TransactionDetailController::class, 'index'])->name('finances.transactions.details.index');
                        Route::post('/', [TransactionDetailController::class, 'store'])->name('finances.transactions.details.store');
                        Route::get('/create', [TransactionDetailController::class, 'create'])->name('finances.transactions.details.create');
                        Route::match(['put', 'patch'],'/{transactiondetail}', [TransactionDetailController::class, 'update'])->name('finances.transactions.details.update');
                        Route::delete('/{transactiondetail}', [TransactionDetailController::class, 'destroy'])->name('finances.transactions.details.destroy');
                        Route::get('/{transactiondetail}/edit', [TransactionDetailController::class, 'edit'])->name('finances.transactions.details.edit');
                        // Route::post('/export', [TransactionDetailController::class, 'export'])->name('finances.transactions.details.export');
                    });

                    // receives scaffold
                    Route::group(['prefix' => 'receives'], function () {
                        Route::get('/', [ReceiveController::class, 'index'])->name('finances.transactions.receives.index');
                        Route::post('/', [ReceiveController::class, 'store'])->name('finances.transactions.receives.store');
                        Route::post('/link', [ReceiveController::class, 'link'])->name('finances.transactions.receives.link');
                        Route::get('/create', [ReceiveController::class, 'create'])->name('finances.transactions.receives.create');
                        Route::get('/request', [ReceiveController::class, 'show'])->name('finances.transactions.receives.show');
                        Route::match(['put', 'patch'],'/update', [ReceiveController::class, 'update'])->name('finances.transactions.receives.update');
                        Route::delete('/{receive}', [ReceiveController::class, 'destroy'])->name('finances.transactions.receives.destroy');
                        Route::get('/{receive}/edit', [ReceiveController::class, 'edit'])->name('finances.transactions.receives.edit');
                        // Route::post('/export', [ReceiveController::class, 'export'])->name('finances.transactions.receives.export');
                    });

                    // invoices scaffold
                    Route::group(['prefix' => 'invoices'], function () {
                        Route::get('/', [InvoiceController::class, 'index'])->name('finances.transactions.invoices.index');
                        Route::post('/', [InvoiceController::class, 'store'])->name('finances.transactions.invoices.store');
                        Route::post('/link', [InvoiceController::class, 'link'])->name('finances.transactions.invoices.link');
                        Route::get('/create', [InvoiceController::class, 'create'])->name('finances.transactions.invoices.create');
                        Route::get('/request', [InvoiceController::class, 'show'])->name('finances.transactions.invoices.show');
                        Route::match(['put', 'patch'],'/update', [InvoiceController::class, 'update'])->name('finances.transactions.invoices.update');
                        Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('finances.transactions.invoices.destroy');
                        Route::get('/{invoice}/edit', [InvoiceController::class, 'edit'])->name('finances.transactions.invoices.edit');
                        // Route::post('/export', [InvoiceController::class, 'export'])->name('finances.transactions.invoices.export');
                    });

                    // corrects scaffold
                    Route::group(['prefix' => 'corrects'], function () {
                        Route::get('/', [CorrectController::class, 'index'])->name('finances.transactions.corrects.index');
                        Route::post('/', [CorrectController::class, 'store'])->name('finances.transactions.corrects.store');
                        Route::get('/create', [CorrectController::class, 'create'])->name('finances.transactions.corrects.create');
                        Route::get('/{correct}', [CorrectController::class, 'show'])->name('finances.transactions.corrects.show');
                        Route::match(['put', 'patch'],'/{correct}', [CorrectController::class, 'update'])->name('finances.transactions.corrects.update');
                        Route::delete('/{correct}', [CorrectController::class, 'destroy'])->name('finances.transactions.corrects.destroy');
                        Route::get('/{correct}/edit', [CorrectController::class, 'edit'])->name('finances.transactions.corrects.edit');
                        // Route::post('/export', [CorrectController::class, 'export'])->name('finances.transactions.corrects.export');
                    });

                    // pcashes scaffold
                    Route::group(['prefix' => 'pcashes'], function () {
                        Route::get('/', [PCashController::class, 'index'])->name('finances.transactions.pcashes.index');
                        Route::post('/', [PCashController::class, 'store'])->name('finances.transactions.pcashes.store');
                        Route::get('/create', [PCashController::class, 'create'])->name('finances.transactions.pcashes.create');
                        Route::get('/{pcash}', [PCashController::class, 'show'])->name('finances.transactions.pcashes.show');
                        Route::match(['put', 'patch'],'/{pcash}', [PCashController::class, 'update'])->name('finances.transactions.pcashes.update');
                        Route::delete('/{pcash}', [PCashController::class, 'destroy'])->name('finances.transactions.pcashes.destroy');
                        Route::get('/{pcash}/edit', [PCashController::class, 'edit'])->name('finances.transactions.pcashes.edit');
                        // Route::post('/export', [CorrectController::class, 'export'])->name('finances.transactions.pcashes.export');
                    });

                });

            });
            // account scaffold
            // Route::group(['prefix' => 'accounts'], function () {
            //     Route::get('/', [AccountController::class, 'index'])->name('accounts.index')->middleware('permission:account-read');
            //     Route::post('/', [AccountController::class, 'store'])->name('accounts.store');
            //     Route::get('/create', [AccountController::class, 'create'])->name('accounts.create')->middleware('permission:account-create');
            //     Route::get('/{account}', [AccountController::class, 'show'])->name('accounts.show')->middleware('permission:account-read');
            //     Route::match(['put', 'patch'],'/{account}', [AccountController::class, 'update'])->name('accounts.update');
            //     Route::delete('/{account}', [AccountController::class, 'destroy'])->name('accounts.destroy')->middleware('permission:account-delete');
            //     Route::get('/{account}/edit', [AccountController::class, 'edit'])->name('accounts.edit')->middleware('permission:account-update');
            // });
            // period scaffold
            // Route::group(['prefix' => 'periods'], function () {
            //     Route::get('/', [PeriodController::class, 'index'])->name('periods.index')->middleware('permission:period-read');
            //     Route::post('/', [PeriodController::class, 'store'])->name('periods.store');
            //     Route::get('/create', [PeriodController::class, 'create'])->name('periods.create')->middleware('permission:period-create');
            //     Route::get('/{period}', [PeriodController::class, 'show'])->name('periods.show')->middleware('permission:period-read');
            //     Route::match(['put', 'patch'],'/{period}', [PeriodController::class, 'update'])->name('periods.update');
            //     Route::delete('/{period}', [PeriodController::class, 'destroy'])->name('periods.destroy')->middleware('permission:period-delete');
            //     Route::get('/{period}/edit', [PeriodController::class, 'edit'])->name('periods.edit')->middleware('permission:period-update');
            // });
            // transactionheader scaffold
            // Route::group(['prefix' => 'transactionheaders'], function () {
            //     Route::get('/', [TransactionHeaderController::class, 'index'])->name('transactionheaders.index')->middleware('permission:period-read');
            //     Route::post('/', [TransactionHeaderController::class, 'store'])->name('transactionheaders.store');
            //     Route::get('/create', [TransactionHeaderController::class, 'create'])->name('transactionheaders.create')->middleware('permission:period-create');
            //     Route::get('/{transactionheader}', [TransactionHeaderController::class, 'show'])->name('transactionheaders.show')->middleware('permission:period-read');
            //     Route::match(['put', 'patch'],'/{transactionheader}', [TransactionHeaderController::class, 'update'])->name('transactionheaders.update');
            //     Route::delete('/{transactionheader}', [TransactionHeaderController::class, 'destroy'])->name('transactionheaders.destroy')->middleware('permission:period-delete');
            //     Route::get('/{transactionheader}/edit', [TransactionHeaderController::class, 'edit'])->name('transactionheaders.edit')->middleware('permission:period-update');
            // });
            // transaction scaffold
            // Route::group(['prefix' => 'transactions'], function () {
            //     Route::get('/', [TransactionController::class, 'index'])->name('transactions.index')->middleware('permission:period-read');
            //     Route::post('/', [TransactionController::class, 'store'])->name('transactions.store');
            //     Route::get('/create', [TransactionController::class, 'create'])->name('transactions.create')->middleware('permission:period-create');
            //     Route::get('/{transaction}', [TransactionController::class, 'show'])->name('transactions.show')->middleware('permission:period-read');
            //     Route::match(['put', 'patch'],'/{transaction}', [TransactionController::class, 'update'])->name('transactions.update');
            //     Route::delete('/{transaction}', [TransactionController::class, 'destroy'])->name('transactions.destroy')->middleware('permission:period-delete');
            //     Route::get('/{transaction}/edit', [TransactionController::class, 'edit'])->name('transactions.edit')->middleware('permission:period-update');
            // });
            // mastertransaction group
            // Route::group(['prefix' => 'mastertransactions'], function () {
            //     // transactiondetails scaffold
            //     // Route::group(['prefix' => 'transactiondetails'], function () {
            //     //     Route::get('/', [TransactionDetailController::class, 'index'])->name('transactiondetails.index')->middleware('permission:period-read');
            //     //     Route::post('/', [TransactionDetailController::class, 'store'])->name('transactiondetails.store');
            //     //     Route::get('/create', [TransactionDetailController::class, 'create'])->name('transactiondetails.create')->middleware('permission:period-create');
            //     //     Route::get('/{transactiondetail}', [TransactionDetailController::class, 'show'])->name('transactiondetails.show')->middleware('permission:period-read');
            //     //     Route::match(['put', 'patch'],'/{transactiondetail}', [TransactionDetailController::class, 'update'])->name('transactiondetails.update');
            //     //     Route::delete('/{transactiondetail}', [TransactionDetailController::class, 'destroy'])->name('transactiondetails.destroy')->middleware('permission:period-delete');
            //     //     Route::get('/{transactiondetail}/edit', [TransactionDetailController::class, 'edit'])->name('transactiondetails.edit')->middleware('permission:period-update');
            //     // });
            //     // transactiondetails scaffold
            //     // Route::group(['prefix' => 'transactiondetails'], function () {
            //     //     Route::get('/', [TransactionDetailController::class, 'index'])->name('transactiondetails.index')->middleware('permission:period-read');
            //     //     Route::post('/', [TransactionDetailController::class, 'store'])->name('transactiondetails.store');
            //     //     Route::get('/create', [TransactionDetailController::class, 'create'])->name('transactiondetails.create')->middleware('permission:period-create');
            //     //     Route::get('/{transactiondetail}', [TransactionDetailController::class, 'show'])->name('transactiondetails.show')->middleware('permission:period-read');
            //     //     Route::match(['put', 'patch'],'/{transactiondetail}', [TransactionDetailController::class, 'update'])->name('transactiondetails.update');
            //     //     Route::delete('/{transactiondetail}', [TransactionDetailController::class, 'destroy'])->name('transactiondetails.destroy')->middleware('permission:period-delete');
            //     //     Route::get('/{transactiondetail}/edit', [TransactionDetailController::class, 'edit'])->name('transactiondetails.edit')->middleware('permission:period-update');
            //     // });
            //     // invoices scaffold
            //     // Route::group(['prefix' => 'invoices'], function () {
            //     //     Route::get('/', [InvoiceController::class, 'index'])->name('invoices.index')->middleware('permission:period-read');
            //     //     Route::post('/', [InvoiceController::class, 'store'])->name('invoices.store');
            //     //     Route::get('/create', [InvoiceController::class, 'create'])->name('invoices.create')->middleware('permission:period-create');
            //     //     Route::get('/{invoice}', [InvoiceController::class, 'show'])->name('invoices.show')->middleware('permission:period-read');
            //     //     Route::match(['put', 'patch'],'/{invoice}', [InvoiceController::class, 'update'])->name('invoices.update');
            //     //     Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('invoices.destroy')->middleware('permission:period-delete');
            //     //     Route::get('/{invoice}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit')->middleware('permission:period-update');
            //     // });
            // });
        });

        Route::middleware('role:agen')->group(function () {

            // registerpackage scaffold
            Route::group(['prefix' => 'registerpackages'], function () {
                Route::get('/', [RegisterPackageController::class, 'index'])->name('agen.registerpackages.index')->middleware('permission:register-package-read');
                Route::post('/', [RegisterPackageController::class, 'store'])->name('agen.registerpackages.store');
                Route::get('/create', [RegisterPackageController::class, 'create'])->name('agen.registerpackages.create')->middleware('permission:register-package-create');
                Route::get('/{registerpackage}', [RegisterPackageController::class, 'show'])->name('agen.registerpackages.show')->middleware('permission:register-package-read');
                Route::match(['put', 'patch'],'/{registerpackage}', [RegisterPackageController::class, 'update'])->name('agen.registerpackages.update');
                Route::delete('/{registerpackage}', [RegisterPackageController::class, 'destroy'])->name('agen.registerpackages.destroy')->middleware('permission:register-package-delete');
                Route::get('/{registerpackage}/edit', [RegisterPackageController::class, 'edit'])->name('agen.registerpackages.edit')->middleware('permission:register-package-update');
                Route::post('/export', [RegisterPackageController::class, 'export'])->name('agen.registerpackages.export')->middleware('permission:register-package-update');
            });

        });

    // });

    Route::get('password/expired', [UserController::class, 'expired'])->name('password.expired');
    Route::post('password/post_expired', [UserController::class, 'postExpired'])->name('password.post_expired');
});

// Route::group(['prefix' => 'test'], function () {

//     // accounts scaffold
//     Route::group(['prefix' => 'accounts'], function () {
//         Route::get('/', [AccountController::class, 'index'])->name('test.accounts.index');
//         Route::post('/', [AccountController::class, 'store'])->name('test.accounts.store');
//         Route::get('/create', [AccountController::class, 'create'])->name('test.accounts.create');
//         Route::get('/{account}', [AccountController::class, 'show'])->name('test.accounts.show');
//         Route::match(['put', 'patch'],'/{account}', [AccountController::class, 'update'])->name('test.accounts.update');
//         Route::delete('/{account}', [AccountController::class, 'destroy'])->name('test.accounts.destroy');
//         Route::get('/{account}/edit', [AccountController::class, 'edit'])->name('test.accounts.edit');
//         // Route::post('/export', [AccountController::class, 'export'])->name('test.accounts.export');
//     });

//     // periods scaffold
//     Route::group(['prefix' => 'periods'], function () {
//         Route::get('/', [PeriodController::class, 'index'])->name('test.periods.index');
//         Route::post('/', [PeriodController::class, 'store'])->name('test.periods.store');
//         Route::get('/create', [PeriodController::class, 'create'])->name('test.periods.create');
//         Route::get('/{period}', [PeriodController::class, 'show'])->name('test.periods.show');
//         Route::match(['put', 'patch'],'/{period}', [PeriodController::class, 'update'])->name('test.periods.update');
//         Route::delete('/{period}', [PeriodController::class, 'destroy'])->name('test.periods.destroy');
//         Route::get('/{period}/edit', [PeriodController::class, 'edit'])->name('test.periods.edit');
//         // Route::post('/export', [PeriodController::class, 'export'])->name('test.periods.export');
//     });

//     // transactions scaffold
//     Route::group(['prefix' => 'transactions'], function () {
//         Route::get('/', [TransactionDetailController::class, 'index'])->name('test.transactions.index');
//         Route::post('/', [TransactionDetailController::class, 'store'])->name('test.transactions.store');
//         Route::get('/create', [TransactionDetailController::class, 'create'])->name('test.transactions.create');
//         Route::get('/{transaction}', [TransactionDetailController::class, 'show'])->name('test.transactions.show');
//         Route::match(['put', 'patch'],'/{transaction}', [TransactionDetailController::class, 'update'])->name('test.transactions.update');
//         Route::delete('/{transaction}', [TransactionDetailController::class, 'destroy'])->name('test.transactions.destroy');
//         Route::get('/{transaction}/edit', [TransactionDetailController::class, 'edit'])->name('test.transactions.edit');
//         // Route::post('/export', [TransactionDetailController::class, 'export'])->name('test.transactions.export');
//     });

//     // transactionheaders scaffold
//     Route::group(['prefix' => 'transactionheaders'], function () {
//         Route::get('/', [TransactionHeaderController::class, 'index'])->name('test.transactionheaders.index');
//         Route::post('/', [TransactionHeaderController::class, 'store'])->name('test.transactionheaders.store');
//         Route::get('/create', [TransactionHeaderController::class, 'create'])->name('test.transactionheaders.create');
//         Route::get('/{transactionheader}', [TransactionHeaderController::class, 'show'])->name('test.transactionheaders.show');
//         Route::match(['put', 'patch'],'/{transactionheader}', [TransactionHeaderController::class, 'update'])->name('test.transactionheaders.update');
//         Route::delete('/{transactionheader}', [TransactionHeaderController::class, 'destroy'])->name('test.transactionheaders.destroy');
//         Route::get('/{transactionheader}/edit', [TransactionHeaderController::class, 'edit'])->name('test.transactionheaders.edit');
//         // Route::post('/export', [TransactionHeaderController::class, 'export'])->name('test.transactionheaders.export');
//     });

//     // invoices scaffold
//     Route::group(['prefix' => 'invoices'], function () {
//         Route::get('/', [InvoiceController::class, 'index'])->name('test.invoices.index');
//         Route::post('/', [InvoiceController::class, 'store'])->name('test.invoices.store');
//         Route::get('/create', [InvoiceController::class, 'create'])->name('test.invoices.create');
//         Route::get('/{invoice}', [InvoiceController::class, 'show'])->name('test.invoices.show');
//         Route::match(['put', 'patch'],'/{invoice}', [InvoiceController::class, 'update'])->name('test.invoices.update');
//         Route::delete('/{invoice}', [InvoiceController::class, 'destroy'])->name('test.invoices.destroy');
//         Route::get('/{invoice}/edit', [InvoiceController::class, 'edit'])->name('test.invoices.edit');
//         // Route::post('/export', [InvoiceController::class, 'export'])->name('test.invoices.export');
//     });

//     // corrects scaffold
//     Route::group(['prefix' => 'corrects'], function () {
//         Route::get('/', [CorrectController::class, 'index'])->name('test.corrects.index');
//         Route::post('/', [CorrectController::class, 'store'])->name('test.corrects.store');
//         Route::get('/create', [CorrectController::class, 'create'])->name('test.corrects.create');
//         Route::get('/{correct}', [CorrectController::class, 'show'])->name('test.corrects.show');
//         Route::match(['put', 'patch'],'/{correct}', [CorrectController::class, 'update'])->name('test.corrects.update');
//         Route::delete('/{correct}', [CorrectController::class, 'destroy'])->name('test.corrects.destroy');
//         Route::get('/{correct}/edit', [CorrectController::class, 'edit'])->name('test.corrects.edit');
//         // Route::post('/export', [CorrectController::class, 'export'])->name('test.corrects.export');
//     });

//     // pcashes scaffold
//     Route::group(['prefix' => 'pcashes'], function () {
//         Route::get('/', [PCashController::class, 'index'])->name('test.pcashes.index');
//         Route::post('/', [PCashController::class, 'store'])->name('test.pcashes.store');
//         Route::get('/create', [PCashController::class, 'create'])->name('test.pcashes.create');
//         Route::get('/{pcash}', [PCashController::class, 'show'])->name('test.pcashes.show');
//         Route::match(['put', 'patch'],'/{pcash}', [PCashController::class, 'update'])->name('test.pcashes.update');
//         Route::delete('/{pcash}', [PCashController::class, 'destroy'])->name('test.pcashes.destroy');
//         Route::get('/{pcash}/edit', [PCashController::class, 'edit'])->name('test.pcashes.edit');
//         // Route::post('/export', [CorrectController::class, 'export'])->name('test.pcashes.export');
//     });

// });

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
