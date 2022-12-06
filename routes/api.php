<?php

use App\Http\Controllers\AgreementController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CoverageController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ResponsibleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('country',CountryController::class);
Route::apiResource('region',RegionController::class);
Route::apiResource('province',ProvinceController::class);
Route::apiResource('district',DistrictController::class);
Route::apiResource('coverage',CoverageController::class);
Route::apiResource('organization',OrganizationController::class);
Route::apiResource('responsible',ResponsibleController::class);
Route::apiResource('agreement',AgreementController::class);