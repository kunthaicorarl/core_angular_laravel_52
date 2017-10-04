var appModule=angular
        .module('app', 
        ['ui.router',
         'ngMessages', 
         'ngStorage',
         'ngSanitize',
         'swaggerUi', 
         'swaggerUiAuthorization'
        ]);   //'ngMockE2E'
        appModule.config(config);
        appModule.run(run);

    function config(
        $stateProvider, 
        $urlRouterProvider,
        swaggerTranslatorProvider
    ) {

        swaggerTranslatorProvider
        .setLanguage('en')
        .addTranslations('en', {
            appTitle: 'angular-swagger-ui',
            explore: 'Explore',
            loading: 'loading...',
            error: 'Failed to generate Swagger-UI: {{code}} {{message}}',
            french: 'french',
            english: 'english',
            japanese: 'japanese'
        })
        .addTranslations('fr', {
            appTitle: 'angular-swagger-ui',
            explore: 'Explorer',
            loading: 'Chargement ...',
            error: 'Impossible de générer Swagger-UI: {{code}} {{message}}',
            french: 'français',
            english: 'anglais',
            japanese: 'japanese'
        });

        // default route
        $urlRouterProvider.otherwise("/");

        // app routes
        $stateProvider
            .state('home', {
                url: '/',
                templateUrl: 'public/backend/home/index.view.html',
                controller: 'Home.IndexController',
                controllerAs: 'vm'
            })
            .state('login', {
                url: '/login',
                templateUrl: 'public/backend/login/index.view.html',
                controller: 'Login.IndexController',
                controllerAs: 'vm'
            }).state('swaggerUI', {
                url: '/swaggerUI',
                templateUrl: 'public/backend/swagger/swagger.view.html',
                controller: 'Swagger.SwaggerController',
                controllerAs: 'vm'
            });
    }

    function run($rootScope,
          $http, 
          $location,
          $localStorage
          ) {
        // keep user logged in after page refresh
        if ($localStorage.currentUser) {
            $http.defaults.headers.common.Authorization = 'Bearer ' + $localStorage.currentUser.token;
        }
        // redirect to login page if not logged in and trying to access a restricted page
        $rootScope.$on('$locationChangeStart', function (event, next, current) {
            var publicPages = ['/login'];
            var restrictedPage = publicPages.indexOf($location.path()) === -1;
            if (restrictedPage && !$localStorage.currentUser) {
                $location.path('/login');
            }
        });
    }
