<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\Admin\Create as CompanyCreate;
use App\Http\Controllers\Company\Admin\Destroy as CompanyDestroy;
use App\Http\Controllers\Company\Admin\Edit as CompanyEdit;
use App\Http\Controllers\Company\Admin\Store as CompanyStore;
use App\Http\Controllers\Company\Admin\Update as CompanyUpdate;
use App\Http\Controllers\Company\Admin\Index as CompanyIndex;
use App\Http\Controllers\Company\Admin\Show as CompanyShow;
use App\Http\Controllers\Contact\Admin\Create as ContactCreate;
use App\Http\Controllers\Contact\Admin\Destroy as ContactDestroy;
use App\Http\Controllers\Contact\Admin\Edit as ContactEdit;
use App\Http\Controllers\Contact\Admin\Store as ContactStore;
use App\Http\Controllers\Contact\Admin\Update as ContactUpdate;
use App\Http\Controllers\Contact\Admin\Index as ContactIndex;
use App\Http\Controllers\Contact\Admin\Show as ContactShow;
use App\Http\Controllers\Note\Admin\Create as NoteCreate;
use App\Http\Controllers\Note\Admin\Destroy as NoteDestroy;
use App\Http\Controllers\Note\Admin\Edit as NoteEdit;
use App\Http\Controllers\Note\Admin\Store as NoteStore;
use App\Http\Controllers\Note\Admin\Update as NoteUpdate;
use App\Http\Controllers\Note\Admin\Index as NoteIndex;
use App\Http\Controllers\Note\Admin\Show as NoteShow;
use App\Http\Controllers\Opportunity\Admin\Create as OpportunityCreate;
use App\Http\Controllers\Opportunity\Admin\Destroy as OpportunityDestroy;
use App\Http\Controllers\Opportunity\Admin\Edit as OpportunityEdit;
use App\Http\Controllers\Opportunity\Admin\Store as OpportunityStore;
use App\Http\Controllers\Opportunity\Admin\Update as OpportunityUpdate;
use App\Http\Controllers\Opportunity\Admin\Index as OpportunityIndex;
use App\Http\Controllers\Opportunity\Admin\Show as OpportunityShow;
use App\Http\Controllers\Task\Admin\Create as TaskCreate;
use App\Http\Controllers\Task\Admin\Destroy as TaskDestroy;
use App\Http\Controllers\Task\Admin\Edit as TaskEdit;
use App\Http\Controllers\Task\Admin\Store as TaskStore;
use App\Http\Controllers\Task\Admin\Update as TaskUpdate;
use App\Http\Controllers\Task\Admin\Index as TaskIndex;
use App\Http\Controllers\Task\Admin\Show as TaskShow;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::namespace('')
    ->group(function () {
        Route::prefix('companies')->as('companies.')->group(function () {
            Route::get('', CompanyIndex::class)->name('index');
            Route::get('create', CompanyCreate::class)->name('create');
            Route::post('', CompanyStore::class)->name('store');
            Route::get('{company}/edit', CompanyEdit::class)->name('edit');
            Route::patch('{company}', CompanyUpdate::class)->name('update');
            Route::delete('{company}', CompanyDestroy::class)->name('destroy');
            Route::get('{company}', CompanyShow::class)->name('show');
        });
    });

Route::namespace('')
    ->group(function () {
        Route::prefix('contacts')->as('contacts.')->group(function () {
            Route::get('', ContactIndex::class)->name('index');
            Route::get('create', ContactCreate::class)->name('create');
            Route::post('', ContactStore::class)->name('store');
            Route::get('{contact}/edit', ContactEdit::class)->name('edit');
            Route::patch('{contact}', ContactUpdate::class)->name('update');
            Route::delete('{contact}', ContactDestroy::class)->name('destroy');
            Route::get('{contact}', ContactShow::class)->name('show');
        });
    });

Route::namespace('')
    ->group(function () {
        Route::prefix('notes')->as('notes.')->group(function () {
            Route::get('', NoteIndex::class)->name('index');
            Route::get('create', NoteCreate::class)->name('create');
            Route::post('', NoteStore::class)->name('store');
            Route::get('{note}/edit', NoteEdit::class)->name('edit');
            Route::patch('{note}', NoteUpdate::class)->name('update');
            Route::delete('{note}', NoteDestroy::class)->name('destroy');
            Route::get('{note}', NoteShow::class)->name('show');
        });
    });


Route::namespace('')
    ->group(function () {
        Route::prefix('opportunities')->as('opportunities.')->group(function () {
            Route::get('', OpportunityIndex::class)->name('index');
            Route::get('create', OpportunityCreate::class)->name('create');
            Route::post('', OpportunityStore::class)->name('store');
            Route::get('{opportunity}/edit', OpportunityEdit::class)->name('edit');
            Route::patch('{opportunity}', OpportunityUpdate::class)->name('update');
            Route::delete('{opportunity}', OpportunityDestroy::class)->name('destroy');
            Route::get('{opportunity}', OpportunityShow::class)->name('show');
        });
    });


Route::namespace('')
    ->group(function () {
        Route::prefix('tasks')->as('tasks.')->group(function () {
            Route::get('', TaskIndex::class)->name('index');
            Route::get('create', TaskCreate::class)->name('create');
            Route::post('', TaskStore::class)->name('store');
            Route::get('{task}/edit', TaskEdit::class)->name('edit');
            Route::patch('{task}', TaskUpdate::class)->name('update');
            Route::delete('{task}', TaskDestroy::class)->name('destroy');
            Route::get('{task}', TaskShow::class)->name('show');
        });
    });
