<!DOCTYPE html>
<html ng-app="app">
<head>
    <title>AngularJS JWT Authentication Example & Tutorial</title>

    <!-- bootstrap css -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

    <!-- application css -->
    <link href="public/backend/app-content/app.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://orange-opensource.github.io/angular-swagger-ui/css/swagger-ui.min.css">
    <link rel="stylesheet" href="http://orange-opensource.github.io/angular-swagger-ui/css/demo.css">

</head>
<body>
    <!-- main app container -->
    <div class="jumbotron">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <ui-view></ui-view>
            </div>
        </div>
    </div>

    <!-- credits -->
    <div class="text-center">
        <p>
            <a href="http://jasonwatmore.com/post/2016/04/05/AngularJS-JWT-Authentication-Example-Tutorial.aspx" target="_top">AngularJS JWT Authentication Example & Tutorial</a>
        </p>
        <p>
            <a href="http://jasonwatmore.com" target="_top">JasonWatmore.com</a>
        </p>
    </div>
    <!-- angular scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.18/angular-ui-router.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ngStorage/0.3.6/ngStorage.min.js"></script>

    
      <!-- dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-sanitize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-yaml/3.8.2/js-yaml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.6/marked.min.js"></script>
    <!-- angular-swagger-ui -->
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/swagger-ui.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger-external-references.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger1-to-swagger2-converter.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger-xml-formatter.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger-yaml-parser.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger-markdown.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/modules/swagger-auth-ui-bootstrap-modal.min.js"></script>
    <script src="http://orange-opensource.github.io/angular-swagger-ui/scripts/i18n/fr.min.js"></script>

    <!-- application scripts -->

    <script src="public/backend/app.js"></script>
    <script src="public/backend/app-services/authentication.service.js"></script>
    <script src="public/backend/home/index.controller.js"></script>
    <script src="public/backend/login/index.controller.js"></script>

    
    <!-- scripts for fake backend -->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-mocks.js"></script>
    <script src="public/backend/app-helpers/fake-backend.js"></script>
</body>
</html>