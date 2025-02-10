<?php


Route::middleware('guest')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/',[App\Http\Controllers\Auth\LoginController::class, 'getLogin'])->name('login-view');
    Route::get('login',[App\Http\Controllers\Auth\LoginController::class, 'getLogin'])->name('login-view');
    Route::post('login',[App\Http\Controllers\Auth\LoginController::class, 'postLogin'])->name('login');
    Route::get('register',[App\Http\Controllers\Auth\RegisterController::class, 'getRegister'])->name('register-view');
    Route::post('register',[App\Http\Controllers\Auth\RegisterController::class, 'postRegister'])->name('register');
    
    
    
});

Route::post('admin/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('admin.logout');


Route::middleware(['auth', 'check_user_active'])->prefix('admin')->group(function () {
    //admin
    Route::get('dashboard',[App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.dashboard');
    //Route::get('index',[App\Http\Controllers\Backend\AdminController::class, 'index'])->name('admin.index');
    Route::resource('accounts', App\Http\Controllers\Backend\UserController::class);
    Route::get('accounts/{admin}/change_status',[App\Http\Controllers\Backend\UserController::class, 'changeStatus'])->name('accounts.changeStatus');
    //Teacher
    // Route::resource('teachers',App\Http\Controllers\Backend\TeacherController::class);
    // Route::get('teachers/{teacher}/change_status',[App\Http\Controllers\Backend\TeacherController::class, 'changeStatus'])->name('teachers.changeStatus');

    //Student
    // Route::resource('students', App\Http\Controllers\Backend\StudentController::class);
    // Route::get('students/{student}/change_status',[App\Http\Controllers\Backend\StudentController::class, 'changeStatus'])->name('students.changeStatus');
    // //Transactions
    // Route::resource('transactions',App\Http\Controllers\Backend\TransactionController::class);
    // Route::get('transactions/{transaction}/change_status',[App\Http\Controllers\Backend\TransactionController::class, 'changeStatus'])->name('transactions.changeStatus');
    // //Transactions
    // Route::resource('orders',App\Http\Controllers\Backend\OrderController::class);
    // Route::get('orders/{order}/change_status',[App\Http\Controllers\Backend\OrderController::class, 'changeStatus'])->name('transactions.changeStatus');

    
    //NRC
    // Route::get('nrc/getNrcTownshipByStateId/{state_id}', [App\Http\Controllers\Backend\NRCController::class, 'getNrcTownshipByStateId']);

    // Activity Logs Route
    Route::resource('activity_logs', App\Http\Controllers\Backend\ActivityLogController::class)->only('index');

    // Role Route
    Route::resource('roles', App\Http\Controllers\Backend\RoleController::class);
    
    Route::get('/permissions/{guard_name}', [App\Http\Controllers\Backend\RoleController::class, 'getPermissionsByGuard']);
    
    // Post Route
    Route::resource('posts', App\Http\Controllers\Backend\PostController::class);
    Route::get('posts/{post}/change_status',[App\Http\Controllers\Backend\PostController::class, 'changeStatus'])->name('posts.changeStatus');

    // Post Route
    Route::resource('post_categories', App\Http\Controllers\Backend\PostCategoryController::class);
    Route::get('post_categories/{post_category}/change_status',[App\Http\Controllers\Backend\PostCategoryController::class, 'changeStatus'])->name('post_categories.changeStatus');

    
    // Page Route
    Route::resource('pages', App\Http\Controllers\Backend\PageController::class);
    Route::get('pages/{page}/change_status',[App\Http\Controllers\Backend\PageController::class, 'changeStatus'])->name('pages.changeStatus');

    // Service Route
    Route::resource('services', App\Http\Controllers\Backend\ServiceController::class);
    Route::get('services/{service}/change_status',[App\Http\Controllers\Backend\ServiceController::class, 'changeStatus'])->name('services.changeStatus');

    // Project Route
    Route::resource('projects', App\Http\Controllers\Backend\ProjectController::class);
    Route::get('projects/{project}/change_status',[App\Http\Controllers\Backend\ProjectController::class, 'changeStatus'])->name('projects.changeStatus');

    // Subject Route
    //Route::resource('subjects', App\Http\Controllers\Backend\SubjectController::class);

    // Lesson Route
    //Route::resource('lessons', App\Http\Controllers\Backend\LessonController::class);
    // Enrollment Route
    //Route::resource('enrollments', App\Http\Controllers\Backend\EnrollmentController::class);
    // Route::get('enrollments/{enrollment}/change_status',[App\Http\Controllers\Backend\EnrollmentController::class, 'changeStatus'])->name('enrollments.changeStatus');

    // Route::post('enroll', [App\Http\Controllers\Backend\EnrollmentController::class, 'enroll']);
    // Route::get('course/{courseId}/enrollments', [App\Http\Controllers\Backend\EnrollmentController::class, 'getCourseEnrollments']);
    // Route::get('student/{studentId}/enrollments', [App\Http\Controllers\Backend\EnrollmentController::class, 'getStudentEnrollments']);

    // Route::resource('payments', App\Http\Controllers\Backend\PaymentMethodController::class);
    // Route::post('payments/change_status', [App\Http\Controllers\Backend\PaymentMethodController::class, 'changeStatus'])->name('payment_methods.change-status');

    // Route::resource('assignments', App\Http\Controllers\Backend\AssignmentController::class);
    // Route::get('assignments/{assignment}/change_status', [App\Http\Controllers\Backend\AssignmentController::class, 'changeStatus'])->name('assignments.change-status');

    // //Exam
    // Route::resource('exams', App\Http\Controllers\Backend\ExamController::class);
    // Route::get('exams/{exam}/change_status', [App\Http\Controllers\Backend\ExamController::class, 'changeStatus'])->name('exams.change-status');

    // //Question
    // Route::resource('questions', App\Http\Controllers\Backend\QuestionController::class);
    // Route::get('questions/{question}/change_status', [App\Http\Controllers\Backend\QuestionController::class, 'changeStatus'])->name('questions.change-status');

    Route::resource('subscribers', App\Http\Controllers\Backend\SubscriberController::class);
    Route::get('subscribers/{subscriber}/change_status',[App\Http\Controllers\Backend\SubscriberController::class, 'changeStatus'])->name('subscribers.changeStatus');
    
    Route::resource('sliders', App\Http\Controllers\Backend\SliderController::class);
    Route::get('sliders/{slider}/change_status',[App\Http\Controllers\Backend\SliderController::class, 'changeStatus'])->name('sliders.changeStatus');
    
    Route::resource('partners', App\Http\Controllers\Backend\PartnerController::class);
    Route::get('partners/{partner}/change_status',[App\Http\Controllers\Backend\PartnerController::class, 'changeStatus'])->name('partners.changeStatus');
    

    // Config Settings Route
    Route::get('config_settings', [App\Http\Controllers\Backend\ConfigSettingController::class, 'index'])->name('config_settings.index');
    Route::patch('config_settings/{config_setting}', [App\Http\Controllers\Backend\ConfigSettingController::class, 'update'])->name('config_settings.update');
    Route::get('password-confirmation', [App\Http\Controllers\Backend\ConfigSettingController::class, 'passwordConfirm'])->name('password-confirm');


});