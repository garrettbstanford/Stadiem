use App\Http\Controllers\TeamController;

Route::get('/teams', [TeamController::class, 'index']);  // GET all teams
Route::get('/teams/{id}', [TeamController::class, 'show']);  // GET a specific team by ID
Route::post('/teams', [TeamController::class, 'store']);  // POST to create a new team
Route::put('/teams/{id}', [TeamController::class, 'update']);  // PUT to update an existing team
Route::delete('/teams/{id}', [TeamController::class, 'destroy']);  // DELETE a team


