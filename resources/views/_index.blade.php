<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html 
     PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta charset="utf-8">
        <title>Angular-Laravel Authentication</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body ng-app="authApp">

        <div class="container">
            <div ui-view></div>
        </div>        

    </body>

    <!-- Application Dependencies -->
    <script src="node_modules/angular/angular.min.js"></script>
    <script src="node_modules\angular-ui-router\release\angular-ui-router.min.js"></script>
    <script src="node_modules/satellizer/dist/satellizer.js"></script>

    <!-- Application Scripts -->
    <script src="public/app/application.js"></script>
    <script src="public/app/auth/authController.js"></script>
    <script src="public/app/user/userController.js"></script>
</html>