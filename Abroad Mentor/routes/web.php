<?php



Route::get('/', function () {return view('pages.index');});


//admin acount create=======
// Route::get('admin/account/create','Admin\SettingController@account')->name('account.create');


//admin=======
Route::get('admin/home','AdminController@index');
Route::get('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@login');


// Password Reset Routes...
Route::get('admin/password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');






//admin dashbord work.............................................

//Student Application  Detail
Route::get('admin/student/application','Admin\StudentApplyController@index')->name('admin.student.application');
Route::get('delete/student/{id}','Admin\StudentApplyController@DeleteApplication');
Route::get('view/student/{id}','Admin\StudentApplyController@ViewApplication');



//setting 
Route::get('admin/setting','Admin\SettingController@setting')->name('admin.setting');
Route::post('store/setting','Admin\SettingController@StoreSetting')->name('store.setting');
Route::get('delete/setting/{id}','Admin\SettingController@DeleteSetting');
Route::get('inactive/sitesetting/{id}','Admin\SettingController@Inactive');
Route::get('active/sitesetting/{id}','Admin\SettingController@Active');
Route::get('edit/setting/{id}','Admin\SettingController@EditSetting');
Route::post('update/setting/{id}','Admin\SettingController@UpdateSetting');


//slider 
Route::get('admin/slider','Admin\SettingController@slider')->name('admin.slider');
Route::post('admin/store/slider','Admin\SettingController@storeslider')->name('store.slider');
Route::get('delete/slider/{id}','Admin\SettingController@DeleteSlider');
Route::get('inactive/setting/{id}','Admin\SettingController@InactiveSlider');
Route::get('active/setting/{id}','Admin\SettingController@ActiveSlider');


//blog uplode
Route::get('admin/blog','Admin\BlogPostController@blog')->name('admin.blog');
Route::post('admin/store/blog','Admin\BlogPostController@storeblog')->name('store.blog');
Route::get('delete/blog/{id}','Admin\BlogPostController@DeleteBlog');
Route::get('admin/blog/all','Admin\BlogPostController@allblog')->name('all.blog');
Route::get('view/single/blog/{id}','Admin\BlogPostController@ViewBlog');
Route::get('edit/blog/{id}','Admin\BlogPostController@EditBlog');
Route::post('update/blog/{id}','Admin\BlogPostController@UpdateBlog');


//Countries
Route::get('admin/add/countries','Admin\CountriesController@index')->name('admin.countries');
Route::post('admin/store/countries','Admin\CountriesController@storecountries')->name('store.countries');
Route::get('inactive/countries/{id}','Admin\CountriesController@Inactive');
Route::get('active/countries/{id}','Admin\CountriesController@Active');
Route::get('delete/countries/{id}','Admin\CountriesController@DeleteCountry');
Route::get('edit/countries/{id}','Admin\CountriesController@EditCountry');
Route::post('update/countries/{id}','Admin\CountriesController@UpdateCountry');

//Contact Us
Route::get('admin/add/contact','Admin\ContactUsController@index')->name('admin.contact');
Route::post('admin/store/contactus','Admin\ContactUsController@storecontact')->name('store.storecontact');
Route::get('inactive/contactus/{id}','Admin\ContactUsController@Inactive');
Route::get('active/contactus/{id}','Admin\ContactUsController@Active');
Route::get('delete/contactus/{id}','Admin\ContactUsController@DeleteContactUs');
Route::get('edit/contactus/{id}','Admin\ContactUsController@EditContactUs');
Route::post('update/contactus/{id}','Admin\ContactUsController@UpdateContactUs');


//About = Our Facilities
Route::get('admin/add/ourFacility','Admin\AboutController@indexFacility')->name('admin.facility');
Route::post('admin/store/ourFacility','Admin\AboutController@storefacilites')->name('store.facilites');
Route::get('inactive/facilities/{id}','Admin\AboutController@InactiveFacilities');
Route::get('active/facilities/{id}','Admin\AboutController@ActiveFacilities');
Route::get('delete/facilities/{id}','Admin\AboutController@DeleteFacilities');
Route::get('view/facilities/{id}','Admin\AboutController@ViewFacilities');
Route::get('edit/facilities/{id}','Admin\AboutController@EditFacilities');
Route::post('update/facilities/{id}','Admin\AboutController@UpdateFacilities');

//About = Our Work Flow
Route::get('admin/add/ourWorkFlow','Admin\AboutController@indexWorkFlow')->name('admin.work.flow');
Route::post('admin/store/ourWorkFlow','Admin\AboutController@storeWorkFlow')->name('store.workflow');
Route::get('delete/ourWorkFlow/{id}','Admin\AboutController@DeleteWorkFlow');
Route::get('edit/ourWorkFlow/{id}','Admin\AboutController@EditWorkFlow');
Route::post('update/ourWorkFlow/{id}','Admin\AboutController@UpdateWorkFlow');



//About = Important Fact
Route::get('admin/add/fact','Admin\AboutImportantThinkController@index')->name('admin.fact');
Route::post('admin/store/fact','Admin\AboutImportantThinkController@storefact')->name('store.fact');
Route::get('delete/fact/{id}','Admin\AboutImportantThinkController@DeleteFact');
Route::get('edit/fact/{id}','Admin\AboutImportantThinkController@EditFact');
Route::post('update/fact/{id}','Admin\AboutImportantThinkController@UpdateFact');


//About Section
Route::get('admin/add/aboutus','Admin\AboutController@indexAboutUs')->name('admin.about.us');
Route::post('admin/store/aboutus','Admin\AboutController@storeAboutUs')->name('store.aboutus');
Route::get('delete/aboutus/{id}','Admin\AboutController@DeleteAboutUs');
Route::get('edit/aboutus/{id}','Admin\AboutController@EditAboutUs');
Route::post('update/aboutus/{id}','Admin\AboutController@UpdateAboutUs');


//Countries Details
Route::get('admin/add/countriesDetails','Admin\CountryDetailsController@createCountry')->name('admin.countriesdetails');
Route::post('admin/add/countriesDetailsInfo','Admin\CountryDetailsController@storecountriesDetails')->name('admin.countriesdetailsInfo');
Route::get('admin/all/countriesDetails','Admin\CountryDetailsController@index')->name('admin.allcountriesdetails');
Route::get('view/countries/details/{id}','Admin\CountryDetailsController@ViewCountry');
Route::get('edit/countries/details/{id}','Admin\CountryDetailsController@EditCountriesDetails');
Route::post('update/countries/details/{id}','Admin\CountryDetailsController@UpdateCountrieDetails');
//Team Member Information

Route::get('admin/team','Admin\TeamMemberController@index')->name('admin.team');
Route::post('admin/store/team','Admin\TeamMemberController@storeTeam')->name('store.team');
Route::get('delete/team/member/{id}','Admin\TeamMemberController@DeleteTeam');
Route::get('edit/team/member/{id}','Admin\TeamMemberController@EditTeam');
Route::post('update/team/member/{id}','Admin\TeamMemberController@UpdateTeam');
//User Site...............................



//Our Facility
Route::get('page/ourFacility','FrontController@ourFacility')->name('page.ourfacilities');
//blog Details
Route::get('view/blog/{id}','FrontController@ViewSingleBlog');
//countries Details Information
Route::get('countries/detail/{id}','CountriesDetailController@ViewCountryDetails');
//application Process
Route::get('page/application/process','FrontController@applicationProcess')->name('page.application');
//tnx msg
Route::get('page/abroad/mentors/','FrontController@tnqMsg')->name('tnq.apply');
//IELTS Information
Route::get('page/abroad/mentors/ielts','FrontController@ieltsInfo')->name('page.ielts');




//Apply Abroad Mentor
Route::get('page/student/apply','StudentAddFromController@index')->name('page.student.apply');
Route::post('page/store/student','StudentAddFromController@storestudentinfo')->name('store.student');













