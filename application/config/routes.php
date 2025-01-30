<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'errors/error_404';
$route['translate_uri_dashes'] = TRUE;  // Mengizinkan penggunaan tanda hubung dalam nama controller dan metode

// Custom error routes
$route['error/404'] = 'errors/error_404';
$route['error/403'] = 'errors/error_403';
$route['error/500'] = 'errors/error_500';

// Admin Authentication Routes
$route['admin/login'] = 'auth/login';      
$route['admin/logout'] = 'auth/logout';      
$route['admin/auth/process_login'] = 'auth/process_login'; 

// Admin Dashboard Routes
$route['admin/dashboard'] = 'dashboard';
$route['admin/tahun-pelayanan'] = 'tahuntriwulan';

// Hari Sabat Routes
$route['admin/hari-sabat/(:any)'] = 'harisabat/index/$1';
$route['admin/hari-sabat'] = 'harisabat/index';
$route['HariSabat/add'] = 'HariSabat/add';
$route['HariSabat/delete/(:num)/(:num)'] = 'HariSabat/delete/$1/$2';
$route['HariSabat/edit/(:num)'] = 'HariSabat/edit/$1';
$route['HariSabat/update'] = 'HariSabat/update';

// Admin Role Management Routes
$route['admin/roles'] = 'roles';
$route['admin/roles/update_user_role'] = 'roles';
$route['admin/user-management'] = 'dashboard/usermanagement';
$route['admin/permission-management'] = 'dashboard/permissionmanagement';
$route['admin/permission_management/add_permission'] = 'roles/add_permission';
$route['admin/permission_management/update_permission'] = 'roles/update_permission';

// Kelas Sekolah Sabat Routes
$route['admin/kelas-sekolah-sabat'] = 'dashboard/kelas';
$route['admin/kelas/add_class'] = 'dashboard/add_class';
$route['admin/kelas/edit_class/(:any)'] = 'dashboard/edit_class/$1';
$route['admin/kelas/delete_class'] = 'dashboard/delete_class';

// Berita Misi Routes
$route['admin/berita-misi/anak-anak'] = 'BeritaMisiAnak/index';
$route['admin/berita-misi/anak-anak/create'] = 'BeritaMisiAnak/create';
$route['admin/berita-misi/anak-anak/store'] = 'BeritaMisiAnak/store';
$route['admin/berita-misi/anak-anak/edit/(:num)'] = 'BeritaMisiAnak/edit/$1';
$route['admin/berita-misi/anak-anak/update/(:num)'] = 'BeritaMisiAnak/update/$1';
$route['admin/berita-misi/anak-anak/delete/(:num)'] = 'BeritaMisiAnak/delete/$1';

// Public Pages Routes
$route['pages/resources'] = 'pages/resources';
$route['pages/resourcelinks'] = 'pages/resourcelinks';
$route['pages/tentangss'] = 'pages/tentangss';
$route['pages/tentanggracelink'] = 'pages/tentanggracelink';
$route['pages/ruanglingkupss'] = 'pages/ruanglingkupss';
$route['pages/ssaa'] = 'pages/ssaa';
$route['pages/ssaa/beginner'] = 'pages/beginner';
$route['pages/ssaa/kindergarten'] = 'pages/kindergarten';
$route['pages/ssaa/primary'] = 'pages/primary';
$route['pages/ssaa/powerpoints'] = 'pages/powerpoints';
$route['pages/ssaa/activity'] = 'pages/activity';
$route['pages/ssremaja'] = 'pages/ssremaja';
$route['pages/ssremaja/cornerstone'] = 'pages/cornerstone';
$route['pages/ssremaja/rtf'] = 'pages/rtf';
$route['pages/ssdewasa'] = 'pages/ssdewasa';
$route['pages/ssdewasa/inverse'] = 'pages/inverse';
$route['pages/beritamisi'] = 'pages/beritamisi';
$route['pages/beritamisi/videoberitamisi'] = 'pages/videoberitamisi';
$route['pages/beritamisianak'] = 'pages/beritamisianak';
$route['pages/beritamisianak/(:any)'] = 'pages/beritamisianak_detail/$1';
$route['pages/tentangkami'] = 'pages/tentangkami';
$route['pages/tentang-ourteam'] = 'pages/tentang_ourteam';

//SS ANAK-ANAK
$route['kelas/ss-anak-anak'] = 'kelas/ssaa';
//SS REMAJA
$route['kelas/ss-remaja'] = 'kelas/ssremaja';
$route['ss-remaja/realtimefaith'] = 'kelas/realtimefaith';
$route['ss-remaja/tentang-realtimefaith'] = 'kelas/aboutrealtimefaith';
$route['ss-remaja/cornerstone'] = 'kelas/cornerstone';
$route['ss-remaja/tentang-cornerstone-connections'] = 'kelas/aboutcornerstone';
//SS DEWASA
$route['kelas/ss-dewasa'] = 'kelas/ssdewasa';

//BERITA MISSION
$route['pages/berita-misi'] = 'pages/beritamisi';
$route['berita-misi/anak-anak'] = 'beritamisiweb/beritamisianak';
$route['berita-misi/anak-anak/(:num)'] = 'beritamisiweb/detail_bma/$1';
$route['berita-misi/dewasa'] = 'pages/beritamisidewasa';
$route['berita-misi/video'] = 'pages/videoberitamisi';

//untuk menangani MANAGE ROLES MENU
$route['admin/manage_roles'] = 'admin/manage_roles'; // Admin manage roles
$route['role/manage_roles'] = 'role/manage_roles'; // Untuk pengelolaan role umum
$route['role/create_role'] = 'role/create_role'; // Menampilkan form pembuatan role
$route['role/store_role'] = 'role/store_role'; // Menyimpan role baru
$route['role/edit_role/(:num)'] = 'role/edit_role/$1'; // Menampilkan form edit role
$route['role/update_role/(:num)'] = 'role/update_role/$1'; // Memperbarui role
$route['role/delete_role/(:num)'] = 'role/delete_role/$1'; // Menghapus role

//PROFILES
$route['admin/profile'] = 'admin/profile';
$route['admin/update_profile'] = 'admin/update_profile';
