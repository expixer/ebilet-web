<?php

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

Route::get('/', function () {
    return view('pages.index');
});
Route::get('index.html', function () {
    return view('pages.index');
});
Route::get('create.html', function () {
    return view('pages.create.create');
});
Route::get('create_venue_event.html', function () {
    return view('pages.create.create_venue_event');
});
Route::get('create_online_event.html', function () {
    return view('pages.create.create_online_event');
});
Route::get('pricing.html', function () {
    return view('pages.pricing');
});
Route::get('our_blog.html', function () {
    return view('pages.blog.our_blog');
});
Route::get('blog_detail_view.html', function () {
    return view('pages.blog.blog_detail_view');
});
Route::get('explore_events.html', function () {
    return view('pages.explore_events');
});
Route::get('venue_event_detail_view.html', function () {
    return view('pages.venue_event_detail_view');
});
Route::get('online_event_detail_view.html', function () {
    return view('pages.online_event_detail_view');
});
Route::get('faq.html', function () {
    return view('pages.help.faq');
});
Route::get('help_center.html', function () {
    return view('pages.help.help_center');
});
Route::get('help_article_detail_view.html', function () {
    return view('pages.help.help_article_detail_view');
});
Route::get('help_section_detail_view.html', function () {
    return view('pages.help.help_section_detail_view');
});
Route::get('help_center_knowledge_base.html', function () {
    return view('pages.help.help_center_knowledge_base');
});
Route::get('about_us.html', function () {
    return view('pages.about_us');
});
Route::get('attendee_profile_view.html', function () {
    return view('pages.attendee_profile_view');
});
Route::get('booking_confirmed.html', function () {
    return view('pages.booking_confirmed');
});
Route::get('checkout.html', function () {
return view('pages.checkout');
});
Route::get('checkout_premium.html', function () {
    return view('pages.checkout_premium');
});
Route::get('contact_us.html', function () {
    return view('pages.contact_us');
});
Route::get('error_404.html', function () {
    return view('pages.error_404');
});
Route::get('forgot_password.html', function () {
    return view('pages.forgot_password');
});
Route::get('invoice.html', function () {
    return view('pages.invoice');
});
Route::get('organiser_profile_view.html', function () {
    return view('pages.organiser_profile_view');
});
Route::get('privacy_policy.html', function () {
    return view('pages.privacy_policy');
});
Route::get('refer_a_friend.html', function () {
    return view('pages.refer_a_friend');
});
Route::get('sign_in.html', function () {
    return view('pages.sign_in');
});
Route::get('sign_up.html', function () {
    return view('pages.sign_up');
});
Route::get('term_and_conditions.html', function () {
    return view('pages.term_and_conditions');
});
Route::get('my_organisation_dashboard.html', function () {
    return view('pages.dashboard.my_organisation_dashboard');
});
Route::get('my_organisation_dashboard_about.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_about');
});
Route::get('my_organisation_dashboard_contact_lists.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_contact_lists');
});
Route::get('my_organisation_dashboard_conversion_setup.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_conversion_setup');
});
Route::get('my_organisation_dashboard_events.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_events');
});
Route::get('my_organisation_dashboard_my_team.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_my_team');
});
Route::get('my_organisation_dashboard_payout.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_payout');
});
Route::get('my_organisation_dashboard_promotion.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_promotion');
});
Route::get('my_organisation_dashboard_reports.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_reports');
});
Route::get('my_organisation_dashboard_subscription.html', function () {
    return view('pages.dashboard.my_organisation_dashboard_subscription');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
