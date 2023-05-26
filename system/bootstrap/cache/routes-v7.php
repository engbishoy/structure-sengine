<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => true,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xTfxAOyMjPRj33D4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::10PPs2hQNcvKpcv1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/core' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rh6eLAcffJ7bHF8i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/core/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kAJ3BAUrlDH7ocq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/provider' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l4I7WGEQyqRnv7k5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.login.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'provider.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/locations/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/locations/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/locations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/provider/locations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'provider.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.restore.many',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/providers/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D54N4AS4geViQLao',
          ),
          1 => '{^(?P<user_name>[^\\.]++)\\.localhost$}sDiu',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fbzkFoiMPfWoaTfx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.login.show',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/delete-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy.many',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/restore-many' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore.many',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/dashboard/users/trashed/ajax/datatable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.datatable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|(?:(?:[^./]*+\\.)++)(?|/_debugbar/c(?|lockwork/([^/]++)(*:61)|ache/([^/]++)(?:/([^/]++))?(*:95))|/provider/locations/([^/]++)(?|(*:134)|/edit(*:147)|(*:155))|/dashboard/(?|providers/(?|([^/]++)(?|(*:202)|/edit(*:215)|(*:223))|trashed/([^/]++)(?|(*:251)))|users/(?|([^/]++)(?|(*:281)|/edit(*:294)|(*:302))|trashed/([^/]++)(?|(*:330))))))/?$}sDu',
    ),
    3 => 
    array (
      61 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      95 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.update',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.edit',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.location.destroy',
          ),
          1 => 
          array (
            0 => 'location',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.update',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.edit',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      223 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'provider.trashed.restore',
          ),
          1 => 
          array (
            0 => 'provider',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      294 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'users.trashed.restore',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xTfxAOyMjPRj33D4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005985d69500000000191ea0f9";}";s:4:"hash";s:44:"Q30hNBt61Pbd2/glK6EUo+UtmXDwDft/GgaRDbrjfFk=";}}',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xTfxAOyMjPRj33D4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::10PPs2hQNcvKpcv1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'api',
          2 => 'auth:api',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\Api\\SettingOptionController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers\\Api',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::10PPs2hQNcvKpcv1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rh6eLAcffJ7bHF8i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'controller' => 'Modules\\Core\\Http\\Controllers\\CoreController@index',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::Rh6eLAcffJ7bHF8i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8kAJ3BAUrlDH7ocq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'core/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:287:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:69:"function () {
        return \\view(\'dashboard::pages.index\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005985d6af00000000191ea0f9";}";s:4:"hash";s:44:"t+yBkS92MJ40X0fSJQZPgiU3HFOLnK1mHlMm1UsgjT4=";}}',
        'namespace' => 'Modules\\Core\\Http\\Controllers',
        'prefix' => '/core',
        'where' => 
        array (
        ),
        'as' => 'generated::8kAJ3BAUrlDH7ocq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l4I7WGEQyqRnv7k5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/provider',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005985d6ac00000000191ea0f9";}";s:4:"hash";s:44:"6y+M9B/gmkqdqiBSSz8ueM77rUHcZGnUv4ybVteVvSk=";}}',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::l4I7WGEQyqRnv7k5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'provider.login.show',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'provider.login',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'provider.logout',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '/provider',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/locations/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@destroyMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@destroyMany',
        'as' => 'provider.location.destroy.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/locations/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationDataTableController@__invoke',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationDataTableController',
        'as' => 'provider.location.datatable',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@index',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@index',
        'as' => 'provider.location.index',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'provider/locations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@store',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@store',
        'as' => 'provider.location.store',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/locations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@create',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@create',
        'as' => 'provider.location.create',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'provider/locations/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@update',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@update',
        'as' => 'provider.location.update',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'provider/locations/{location}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@edit',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@edit',
        'as' => 'provider.location.edit',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.location.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'provider/locations/{location}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:provide',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@destroy',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Front\\LocationController@destroy',
        'as' => 'provider.location.destroy',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Front',
        'prefix' => 'provider/locations',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroyMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroyMany',
        'as' => 'provider.destroy.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderDatatableController@__invoke',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderDatatableController',
        'as' => 'provider.datatable',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@index',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@index',
        'as' => 'provider.index',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@store',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@store',
        'as' => 'provider.store',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@create',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@create',
        'as' => 'provider.create',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@update',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@update',
        'as' => 'provider.update',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/{provider}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@edit',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@edit',
        'as' => 'provider.edit',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroy',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\ProviderController@destroy',
        'as' => 'provider.destroy',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => 'dashboard/providers',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroyMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroyMany',
        'as' => 'provider.trashed.destroy.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restoreMany',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restoreMany',
        'as' => 'provider.trashed.restore.many',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/providers/trashed/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroy',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@destroy',
        'as' => 'provider.trashed.destroy',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/providers/trashed/{provider}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restore',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedController@restore',
        'as' => 'provider.trashed.restore',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'provider.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/providers/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedDataTableController@__invoke',
        'controller' => 'Modules\\Provider\\Http\\Controllers\\Trashed\\ProviderTrashedDataTableController',
        'as' => 'provider.trashed.datatable',
        'namespace' => 'Modules\\Provider\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/providers/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D54N4AS4geViQLao' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'domain' => '{user_name}.localhost',
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:416:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:197:"function($user_name){
        $provider=\\Modules\\Provider\\Entities\\Provider::where(\'user_name\',$user_name)->first();
        return \\view(\'provider::locations_username\',\\compact(\'provider\'));
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000005985d68800000000191ea0f9";}";s:4:"hash";s:44:"2mF7Xa5gKvOM6B3eK0f7kdvU7+KHlehd1cV2sDOIxD0=";}}',
        'namespace' => 'Modules\\Provider\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::D54N4AS4geViQLao',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@show',
        'as' => 'user.login.show',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@login',
        'as' => 'user.login',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'Modules\\User\\Http\\Controllers\\Auth\\LoginController@logout',
        'as' => 'user.logout',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/user',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => '\\Illuminate\\Routing\\ViewController@__invoke',
        'controller' => '\\Illuminate\\Routing\\ViewController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '/dashboard',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'view' => 'user::dashboard.dashboard',
        'data' => 
        array (
        ),
        'status' => 200,
        'headers' => 
        array (
        ),
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroyMany',
        'as' => 'users.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserDatatableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserDatatableController',
        'as' => 'users.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'as' => 'users.index',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'as' => 'users.store',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'as' => 'users.create',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'as' => 'users.update',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'as' => 'users.edit',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'as' => 'users.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'dashboard/users',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.destroy.many' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/delete-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroyMany',
        'as' => 'users.trashed.destroy.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.restore.many' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/restore-many',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restoreMany',
        'as' => 'users.trashed.restore.many',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@destroy',
        'as' => 'users.trashed.destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.restore' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'dashboard/users/trashed/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedController@restore',
        'as' => 'users.trashed.restore',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.trashed.datatable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'dashboard/users/trashed/ajax/datatable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:dashboard',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController@__invoke',
        'controller' => 'Modules\\User\\Http\\Controllers\\Trashed\\UserTrashedDataTableController',
        'as' => 'users.trashed.datatable',
        'namespace' => 'Modules\\User\\Http\\Controllers\\Trashed',
        'prefix' => 'dashboard/users/trashed',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fbzkFoiMPfWoaTfx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => '\\Illuminate\\Routing\\RedirectController@__invoke',
        'controller' => '\\Illuminate\\Routing\\RedirectController',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::fbzkFoiMPfWoaTfx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
        'destination' => '/user/login',
        'status' => 301,
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
