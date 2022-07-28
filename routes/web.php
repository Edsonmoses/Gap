<?php

use App\Http\Livewire\Admin\AdminAddAgentsComponent;
use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminAddFAQComponent;
use App\Http\Livewire\Admin\AdminAddFeaturesComponent;
use App\Http\Livewire\Admin\AdminAddLocationComponent;
use App\Http\Livewire\Admin\AdminAddPagesComponent;
use App\Http\Livewire\Admin\AdminAddProductComponent;
use App\Http\Livewire\Admin\AdminAddPropertyComponent;
use App\Http\Livewire\Admin\AdminAddProvideComponent;
use App\Http\Livewire\Admin\AdminAddStepsComponent;
use App\Http\Livewire\Admin\AdminAddTitleComponent;
use App\Http\Livewire\Admin\AdminAddTypeComponent;
use App\Http\Livewire\Admin\AdminAgentsComponent;
use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminCategoryComponent;
use App\Http\Livewire\Admin\AdminEditAgentsComponent;
use App\Http\Livewire\Admin\AdminEditBlogComponent;
use App\Http\Livewire\Admin\AdminEditCategoryComponent;
use App\Http\Livewire\Admin\AdminEditFAQComponent;
use App\Http\Livewire\Admin\AdminEditPagesComponent;
use App\Http\Livewire\Admin\AdminEditPropertyComponent;
use App\Http\Livewire\Admin\AdminEditProvideComponent;
use App\Http\Livewire\Admin\AdminEditStepsComponent;
use App\Http\Livewire\Admin\AdminEditTitleComponent;
use App\Http\Livewire\Admin\AdminFAQComponent;
use App\Http\Livewire\Admin\AdminHomeComponent;
use App\Http\Livewire\Admin\AdminMainSlidersComponent;
use App\Http\Livewire\Admin\AdminPagesComponent;
use App\Http\Livewire\Admin\AdminPropertyComponent;
use App\Http\Livewire\Admin\AdminProvideComponent;
use App\Http\Livewire\Admin\AdminSliderComponent;
use App\Http\Livewire\Admin\AdminStepsComponent;
use App\Http\Livewire\Admin\AdminTitleComponent;
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
use App\Http\Livewire\Pages\ExclusivePropertiesComponent;
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
Route::get('/agent-profile/{slug}', AgentsProfileComponent::class)->name('agents.profile');
//Agency
Route::get('/agency-list', AgencyComponent::class)->name('agency');
Route::get('/agency-profile', AgencyProfileComponent::class)->name('agency.profile');
//Blog
Route::get('/blog', BlogComponent::class)->name('blog');
Route::get('/blog-sidebar-right', BlogRightSidebarComponent::class)->name('blog.right');
Route::get('/blog-sidebar-left', BlogLeftSidebarComponent::class)->name('blog.left');
Route::get('/blog-single/{slug}', BlogSingleComponent::class)->name('blog.single');
//About
Route::get('/about', AboutComponent::class)->name('about');
//Contact
Route::get('/contact', ContactComponent::class)->name('contact');
//FAQ
Route::get('/faq', FAQComponent::class)->name('faq');
//FAQ
Route::get('/page-404', Page404Component::class);
//Properties
Route::get('/properties', PropertiesGridComponent::class)->name('properties');
Route::get('/exclusive-properties', ExclusivePropertiesComponent::class)->name('eproperties');
Route::get('/properties-grid-split', PropertiesGridSplitComponent::class)->name('propsplit');
Route::get('/properties-list', PropertieSlistComponent::class)->name('proplist');
Route::get('/properties-list-split', PropertieSlistSplitComponent::class)->name('proplistspl');
Route::get('/property/{slug}', PropertieSingleGalleryComponent::class)->name('single_gallery');
Route::get('/property-single-slider', PropertieSingleSliderComponent::class)->name('single_slider');


//For User
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    //user Profile
    Route::get('/user/profile', UserProfileComponent::class)->name('user.profile');
    Route::get('/user/social-profile', UserSocialProfileComponent::class)->name('user.social');
    Route::get('/user/my-properties', UserPropertiesComponent::class)->name('user.properties');
    Route::get('/user/favourite-properties', UserFavouritePropertiesComponent::class)->name('user.favourite');
    Route::get('/user/add-property', UserAddPropertiesComponent::class)->name('user.addproperty');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    //For Setting
    Route::get('/admin/home', AdminHomeComponent::class)->name('admin.home');
    //For Category
    Route::get('/admin/category', AdminCategoryComponent::class)->name('admin.category');
    Route::get('/admin/add-category', AdminAddCategoryComponent::class)->name('admin.addcategory');
    Route::get('/admin/edit-category{slug}', AdminEditCategoryComponent::class)->name('admin.editcategory');
    //For Features
    Route::get('/admin/add-features', AdminAddFeaturesComponent::class)->name('admin.addfeatures');
    //For Location
    Route::get('/admin/add-location', AdminAddLocationComponent::class)->name('admin.addlocation');
    //For Properties
    Route::get('/admin/properties', AdminPropertyComponent::class)->name('admin.properties');
    Route::get('/admin/add-property', AdminAddPropertyComponent::class)->name('admin.addproperty');
    Route::get('/admin/edit-property/{slug}', AdminEditPropertyComponent::class)->name('admin.editproperty');
    Route::get('/admin/add-slider', AdminMainSlidersComponent::class)->name('admin.addslider');
    Route::get('/admin/add-type', AdminAddTypeComponent::class)->name('admin.addtype');
    //Pages
    Route::get('/admin/pages', AdminPagesComponent::class)->name('admin.pages');
    Route::get('/admin/add-page', AdminAddPagesComponent::class)->name('admin.addpage');
    Route::get('/admin/edit-page/{slug}', AdminEditPagesComponent::class)->name('admin.editpage');
    //Provide
    Route::get('/admin/provide', AdminProvideComponent::class)->name('admin.provide');
    Route::get('/admin/add-provide', AdminAddProvideComponent::class)->name('admin.addprovide');
    Route::get('/admin/edit-provide/{slug}', AdminEditProvideComponent::class)->name('admin.editprovide');
    //Steps
    Route::get('/admin/steps', AdminStepsComponent::class)->name('admin.steps');
    Route::get('/admin/add-steps', AdminAddStepsComponent::class)->name('admin.addsteps');
    Route::get('/admin/edit-steps/{slug}', AdminEditStepsComponent::class)->name('admin.editsteps');
    //Agents
    Route::get('/admin/agents', AdminAgentsComponent::class)->name('admin.agents');
    Route::get('/admin/add-agent', AdminAddAgentsComponent::class)->name('admin.addagent');
    Route::get('/admin/edit-agent/{slug}', AdminEditAgentsComponent::class)->name('admin.editagent');
    //Page Titles
    Route::get('/admin/titles', AdminTitleComponent::class)->name('admin.titles');
    Route::get('/admin/add-title', AdminAddTitleComponent::class)->name('admin.addtitle');
    Route::get('/admin/edit-title/{title}', AdminEditTitleComponent::class)->name('admin.edititles');
    //FAQ
    Route::get('/admin/faqs', AdminFAQComponent::class)->name('admin.faqs');
    Route::get('/admin/add-faq', AdminAddFAQComponent::class)->name('admin.addfaq');
    Route::get('/admin/edit-faq/{slug}', AdminEditFAQComponent::class)->name('admin.editfaq');
    //Blog
    Route::get('/admin/posts', AdminBlogComponent::class)->name('admin.posts');
    Route::get('/admin/add-post', AdminAddBlogComponent::class)->name('admin.addpost');
    Route::get('/admin/edit-post/{slug}', AdminEditBlogComponent::class)->name('admin.editpost');
});

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
