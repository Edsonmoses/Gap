<?php

use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddFeaturesComponent;
use App\Http\Livewire\Admin\AdminAddLocationComponent;
use App\Http\Livewire\Admin\AdminHomeComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Pages\AboutComponent;
use App\Http\Livewire\Pages\AgencyComponent;
use App\Http\Livewire\Pages\AgencyProfileComponent;
use App\Http\Livewire\Pages\AgentsComponent;
use App\Http\Livewire\Pages\AgentsProfileComponent;
use App\Http\Livewire\Pages\BlogComponent;
use App\Http\Livewire\Pages\BlogLeftSidebarComponent;
use App\Http\Livewire\Pages\BlogRightSidebarComponent;
use App\Http\Livewire\Pages\BlogSingleComponent;
use App\Http\Livewire\Pages\ContactComponent;
use App\Http\Livewire\Pages\FAQComponent;
use App\Http\Livewire\Pages\IndexComponent;
use App\Http\Livewire\Pages\Page404Component;
use App\Http\Livewire\Pages\PropertiesGridComponent;
use App\Http\Livewire\Pages\PropertiesGridSplitComponent;
use App\Http\Livewire\Pages\PropertieSingleGalleryComponent;
use App\Http\Livewire\Pages\PropertieSingleSliderComponent;
use App\Http\Livewire\Pages\PropertieSlistComponent;
use App\Http\Livewire\Pages\PropertieSlistSplitComponent;
use App\Http\Livewire\User\UserAddPropertiesComponent;
use App\Http\Livewire\User\UserFavouritePropertiesComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserPropertiesComponent;
use App\Http\Livewire\User\UserSocialProfileComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', IndexComponent::class)->name('home');

//Agents
Route::get('/agents', AgentsComponent::class)->name('agents');
Route::get('/agent-profile', AgentsProfileComponent::class)->name('agents.profile');
//Agency
Route::get('/agency-list', AgencyComponent::class)->name('agency');
Route::get('/agency-profile', AgencyProfileComponent::class)->name('agency.profile');
//Blog
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/blog-sidebar-right', BlogRightSidebarComponent::class)->name('blog.right');
Route::get('/blog-sidebar-left', BlogLeftSidebarComponent::class)->name('blog.left');
Route::get('/blog-single', BlogSingleComponent::class)->name('blog.single');
//About
Route::get('/about', AboutComponent::class)->name('about');
//Contact
Route::get('/contact', ContactComponent::class)->name('contact');
//FAQ
Route::get('/faq', FAQComponent::class)->name('faq');
//FAQ
Route::get('/page-404', Page404Component::class);
//user Profile
Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
Route::get('/user/social-profile', UserSocialProfileComponent::class)->name('user.social');
Route::get('/user/my-properties', UserPropertiesComponent::class)->name('user.properties');
Route::get('/user/favourite-properties', UserFavouritePropertiesComponent::class)->name('user.favourite');
Route::get('/user/add-property', UserAddPropertiesComponent::class)->name('user.addproperty');
//user Profile
Route::get('/properties', PropertiesGridComponent::class)->name('properties');
Route::get('/properties-grid-split', PropertiesGridSplitComponent::class)->name('propsplit');
Route::get('/properties-list', PropertieSlistComponent::class)->name('proplist');
Route::get('/properties-list-split', PropertieSlistSplitComponent::class)->name('proplistspl');
Route::get('/property-single-gallery', PropertieSingleGalleryComponent::class)->name('single_gallery');
Route::get('/property-single-slider', PropertieSingleSliderComponent::class)->name('single_slider');

//Admin
Route::get('/admin/home', AdminHomeComponent::class)->name('admin.home');
Route::get('/admin/add-category', AdminAddCategoryComponent::class)->name('admin.addcategory');
Route::get('/admin/add-features', AdminAddFeaturesComponent::class)->name('admin.addfeatures');
Route::get('/admin/add-location', AdminAddLocationComponent::class)->name('admin.addlocation');
Route::get('/admin/add-slider', AdminSliderComponent::class)->name('admin.addslider');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
