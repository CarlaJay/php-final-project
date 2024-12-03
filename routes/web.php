<?php

use App\Http\Livewire\Students\Index as StudentsIndex;
use App\Http\Livewire\Courses\Index as CoursesIndex;

Route::middleware(['auth'])->group(function () {
    Route::get('/students', StudentsIndex::class)->name('students.index');
    Route::get('/courses', CoursesIndex::class)->name('courses.index');
});

Route::get('/test', function () {
    return 'Test route is working';
});

require __DIR__.'/auth.php';