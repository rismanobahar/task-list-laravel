<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//ROUTE FOR HOME INDEX
Route::get('/', function () {
  return redirect()->route('tasks.index');
});

//ROUTE USING DATA FROM SEEDER
Route::get('/tasks', function () {
  return view('index', [
      'tasks' => Task::latest()->paginate(10)
  ]);
}) -> name('tasks.index');

//Show layout from create.blade.php (create data page)
Route::view('tasks/create', 'create')
        ->name('tasks.create');

//ROUTE USING DATA FROM SEEDER
  Route::get('/tasks/{task}', function (Task $task) {
  // return 'One Single Task';
  return view('show', [
    'task' => $task
  ]);
}) -> name('tasks.show');

//GET THE DATA BY ID FOR EDIT PAGE
  Route::get('/tasks/{task}/edit', function (Task $task) {
  return view('edit', [
      'task' => $task
  ]);
})->name('tasks.edit');

//ROUTE/REQUEST POST ON URL /tasks
Route::post('/tasks', function (TaskRequest $request) {
  $task = Task::create($request->validated());
  return redirect()->route('tasks.show', ['task' => $task->id])
        ->with('success', 'Task created successfully!');
})->name('tasks.store');

//ROUTE/REQUEST FOR PUT/EDIT ON CERTAIN ID
Route::put('/tasks/{task}', function (Task $task, TaskRequest $request) {
  $task->update($request->validated());
  return redirect()->route('tasks.show', ['task' => $task->id])
      ->with('success', 'Task updated successfully!');
})->name('tasks.update');

//ROUTE FOR REQUEST DELETE
Route::delete('/tasks/{task}', function (Task $task) {
  $task->delete();
  return redirect()->route('tasks.index')                       
      ->with('success', 'Task deleted successfully!');
})->name('tasks.destroy');

//ROUTE FOR TOGGLING A LIST AS COMPLETED/NOT COMPLETED
Route::put('tasks/{task}/toggle-complete', function (Task $task) {
  $task->toggleComplete();
  return redirect()->back()->with('success', 'Task updated successfully!');
})->name('tasks.toggle-complete');

// THE CODE BELOW IS FOR THE FALLBACK ROUTE WHICH WILL BE CALLED WHEN NO ROUTE MATCHES
Route::fallback(function () {
    return 'Still got somewhere!';
});

