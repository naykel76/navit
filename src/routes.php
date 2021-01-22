<?php

use Illuminate\Support\Facades\Route;
use Naykel\Navit\Http\Controllers\PageController;
/** -------------------------------------------------------------------------
 *  =!= IMPORTANT =!= IMPORTANT =!= IMPORTANT =!= IMPORTANT =!= IMPORTANT =!=
 * --------------------------------------------------------------------------
 * Add page routes for this package directly to the application web.php file.
 * This is to ensure that the page routes are loaded last. I am sure there is
 * some other fancy pants way to handle routes direct from the package and set
 * it to load last but it will do for now!
 */



/** ---------------------------------------------------------------------------
 *  =!= MUST RUN LAST =!= MUST RUN LAST =!= MUST RUN LAST =!= MUST RUN LAST =!=
 * ------------------------------------------------------------------------- */
///////////////////////////////////////////////////////////////////////////////
Route::view('/', 'pages.home')->name('home');                               ///
Route::get('/{page}', [PageController::class, 'show'])->name('pages.show'); ///
///////////////////////////////////////////////////////////////////////////////
/** ---------------------------------------------------------------------------
 *  =!= MUST RUN LAST =!= MUST RUN LAST =!= MUST RUN LAST =!= MUST RUN LAST =!=
 * ------------------------------------------------------------------------- */
