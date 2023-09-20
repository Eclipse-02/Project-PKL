<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoyController;
use App\Http\Controllers\EduController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ZipController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RelationController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\SupplierAccController;
use App\Http\Controllers\RegisterPackageController;
use App\Http\Controllers\SupplierSubTypeController;
use App\Http\Controllers\UserRoleController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// currently Logged in user can access 
Route::middleware('auth')->group(function () {
    // Route::resource('/dashboard/registrasi', RegisterController::class);
    // user with 'office' role can access
    Route::middleware('role:office')->group(function () {
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
        // branch scaffold
        Route::group(['prefix' => 'branchs'], function () {
            Route::get('/', [BranchController::class, 'index'])->name('branchs.index')->middleware('permission:branch-read');
            Route::post('/', [BranchController::class, 'store'])->name('branchs.store');
            Route::get('/create', [BranchController::class, 'create'])->name('branchs.create')->middleware('permission:branch-create');
            Route::get('/{branch}', [BranchController::class, 'show'])->name('branchs.show')->middleware('permission:branch-read');
            Route::match(['put', 'patch'],'/{branch}', [BranchController::class, 'update'])->name('branchs.update');
            Route::delete('/{branch}', [BranchController::class, 'destroy'])->name('branchs.destroy')->middleware('permission:branch-delete');
            Route::get('/{branch}/edit', [BranchController::class, 'edit'])->name('branchs.edit')->middleware('permission:branch-update');
        });
        // parameter scaffold
        Route::group(['prefix' => 'parameters'], function () {
            Route::get('/', [ParameterController::class, 'index'])->name('parameters.index')->middleware('permission:parameter-read');
            Route::post('/', [ParameterController::class, 'store'])->name('parameters.store');
            Route::get('/create', [ParameterController::class, 'create'])->name('parameters.create')->middleware('permission:parameter-create');
            Route::get('/{parameter}', [ParameterController::class, 'show'])->name('parameters.show')->middleware('permission:parameter-read');
            Route::match(['put', 'patch'],'/{parameter}', [ParameterController::class, 'update'])->name('parameters.update');
            Route::delete('/{parameter}', [ParameterController::class, 'destroy'])->name('parameters.destroy')->middleware('permission:parameter-delete');
            Route::get('/{parameter}/edit', [ParameterController::class, 'edit'])->name('parameters.edit')->middleware('permission:parameter-update');
        });
        // user scaffold
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('permission:user-read');
            Route::post('/', [UserController::class, 'store'])->name('users.store');
            Route::get('/create', [UserController::class, 'create'])->name('users.create')->middleware('permission:user-create');
            Route::get('/{user}', [UserController::class, 'show'])->name('users.show')->middleware('permission:user-read');
            Route::match(['put', 'patch'],'/{user}', [UserController::class, 'update'])->name('users.update');
            Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('permission:user-delete');
            Route::get('/{user}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('permission:user-update');
        });
        // userrole scaffold
        Route::group(['prefix' => 'userroles/userroles'], function () {
            Route::get('/', [UserRoleController::class, 'index'])->name('userroles.index')->middleware('permission:user-read');
            Route::post('/', [UserRoleController::class, 'store'])->name('userroles.store');
            Route::get('/create', [UserRoleController::class, 'create'])->name('userroles.create')->middleware('permission:user-create');
            Route::get('/{userrole}', [UserRoleController::class, 'show'])->name('userroles.show')->middleware('permission:user-read');
            Route::match(['put', 'patch'],'/{userrole}', [UserRoleController::class, 'update'])->name('userroles.update');
            Route::delete('/{userrole}', [UserRoleController::class, 'destroy'])->name('userroles.destroy')->middleware('permission:user-delete');
            Route::get('/{userrole}/edit', [UserRoleController::class, 'edit'])->name('userroles.edit')->middleware('permission:user-update');
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
        // coy scaffold
        Route::group(['prefix' => 'coys'], function () {
            Route::get('/', [CoyController::class, 'index'])->name('coys.index')->middleware('permission:coy-read');
            Route::post('/', [CoyController::class, 'store'])->name('coys.store');
            Route::get('/create', [CoyController::class, 'create'])->name('coys.create')->middleware('permission:coy-create');
            Route::get('/{coy}', [CoyController::class, 'show'])->name('coys.show')->middleware('permission:coy-read');
            Route::match(['put', 'patch'],'/{coy}', [CoyController::class, 'update'])->name('coys.update');
            Route::delete('/{coy}', [CoyController::class, 'destroy'])->name('coys.destroy')->middleware('permission:coy-delete');
            Route::get('/{coy}/edit', [CoyController::class, 'edit'])->name('coys.edit')->middleware('permission:coy-update');
        });
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
        Route::group(['prefix' => 'edus'], function () {
            Route::get('/', [EduController::class, 'index'])->name('edus.index')->middleware('permission:edu-read');
            Route::post('/', [EduController::class, 'store'])->name('edus.store');
            Route::get('/create', [EduController::class, 'create'])->name('edus.create')->middleware('permission:edu-create');
            Route::get('/{edu}', [EduController::class, 'show'])->name('edus.show')->middleware('permission:edu-read');
            Route::match(['put', 'patch'],'/{edu}', [EduController::class, 'update'])->name('edus.update');
            Route::delete('/{edu}', [EduController::class, 'destroy'])->name('edus.destroy')->middleware('permission:edu-delete');
            Route::get('/{edu}/edit', [EduController::class, 'edit'])->name('edus.edit')->middleware('permission:edu-update');
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
        // bank scaffold
        Route::group(['prefix' => 'banks'], function () {
            Route::get('/', [BankController::class, 'index'])->name('banks.index')->middleware('permission:bank-read');
            Route::post('/', [BankController::class, 'store'])->name('banks.store');
            Route::get('/create', [BankController::class, 'create'])->name('banks.create')->middleware('permission:bank-create');
            Route::get('/{bank}', [BankController::class, 'show'])->name('banks.show')->middleware('permission:bank-read');
            Route::match(['put', 'patch'],'/{bank}', [BankController::class, 'update'])->name('banks.update');
            Route::delete('/{bank}', [BankController::class, 'destroy'])->name('banks.destroy')->middleware('permission:bank-delete');
            Route::get('/{bank}/edit', [BankController::class, 'edit'])->name('banks.edit')->middleware('permission:bank-update');
        });
        // suppliersubtype scaffold
        Route::group(['prefix' => 'suppliersubtypes'], function () {
            Route::get('/', [SupplierSubTypeController::class, 'index'])->name('suppliersubtypes.index')->middleware('permission:supplier-sub-type-read');
            Route::post('/', [SupplierSubTypeController::class, 'store'])->name('suppliersubtypes.store');
            Route::get('/create', [SupplierSubTypeController::class, 'create'])->name('suppliersubtypes.create')->middleware('permission:supplier-sub-type-create');
            Route::get('/{suppliersubtype}', [SupplierSubTypeController::class, 'show'])->name('suppliersubtypes.show')->middleware('permission:supplier-sub-type-read');
            Route::match(['put', 'patch'],'/{suppliersubtype}', [SupplierSubTypeController::class, 'update'])->name('suppliersubtypes.update');
            Route::delete('/{suppliersubtype}', [SupplierSubTypeController::class, 'destroy'])->name('suppliersubtypes.destroy')->middleware('permission:supplier-sub-type-delete');
            Route::get('/{suppliersubtype}/edit', [SupplierSubTypeController::class, 'edit'])->name('suppliersubtypes.edit')->middleware('permission:supplier-sub-type-update');
        });
        // supplier scaffold
        Route::group(['prefix' => 'suppliers'], function () {
            Route::get('/', [SupplierController::class, 'index'])->name('suppliers.index')->middleware('permission:supplier-read');
            Route::post('/', [SupplierController::class, 'store'])->name('suppliers.store');
            Route::get('/create', [SupplierController::class, 'create'])->name('suppliers.create')->middleware('permission:supplier-create');
            Route::get('/{supplier}', [SupplierController::class, 'show'])->name('suppliers.show')->middleware('permission:supplier-read');
            Route::match(['put', 'patch'],'/{supplier}', [SupplierController::class, 'update'])->name('suppliers.update');
            Route::delete('/{supplier}', [SupplierController::class, 'destroy'])->name('suppliers.destroy')->middleware('permission:supplier-delete');
            Route::get('/{supplier}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit')->middleware('permission:supplier-update');
        });
        // supplieracc scaffold
        Route::group(['prefix' => 'supplieraccs'], function () {
            Route::get('/', [SupplierAccController::class, 'index'])->name('supplieraccs.index')->middleware('permission:supplier-acc-read');
            Route::post('/', [SupplierAccController::class, 'store'])->name('supplieraccs.store');
            Route::get('/create', [SupplierAccController::class, 'create'])->name('supplieraccs.create')->middleware('permission:supplier-acc-create');
            Route::get('/{supplieracc}', [SupplierAccController::class, 'show'])->name('supplieraccs.show')->middleware('permission:supplier-acc-read');
            Route::match(['put', 'patch'],'/{supplieracc}', [SupplierAccController::class, 'update'])->name('supplieraccs.update');
            Route::delete('/{supplieracc}', [SupplierAccController::class, 'destroy'])->name('supplieraccs.destroy')->middleware('permission:supplier-acc-delete');
            Route::get('/{supplieracc}/edit', [SupplierAccController::class, 'edit'])->name('supplieraccs.edit')->middleware('permission:supplier-acc-update');
        });
        // package scaffold
        Route::group(['prefix' => 'packages'], function () {
            Route::get('/', [PackageController::class, 'index'])->name('packages.index')->middleware('permission:package-read');
            Route::post('/', [PackageController::class, 'store'])->name('packages.store');
            Route::get('/create', [PackageController::class, 'create'])->name('packages.create')->middleware('permission:package-create');
            Route::get('/{package}', [PackageController::class, 'show'])->name('packages.show')->middleware('permission:package-read');
            Route::match(['put', 'patch'],'/{package}', [PackageController::class, 'update'])->name('packages.update');
            Route::delete('/{package}', [PackageController::class, 'destroy'])->name('packages.destroy')->middleware('permission:package-delete');
            Route::get('/{package}/edit', [PackageController::class, 'edit'])->name('packages.edit')->middleware('permission:package-update');
        });
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
        Route::get('routes', function () {
            return view('scaffolds/index');
        });
    });
});

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
