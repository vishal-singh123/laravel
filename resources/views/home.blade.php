<!DOCTYPE html>
<html>
    <head>
        <base href="/blog/public/">
        <title>HomePage</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="http://unpkg.com/css-font-family@1.0.6/css/css-font-family.min.css" />
        
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <input type="hidden" name="_token" value="{{csrf_token()}}" id="csrf_token">
            <div class="navbar-header">
                <a class="navbar-brand" ui-sref="main">MovieZone</a>
            </div>
              <ul class="nav navbar-nav">
                <li class="active"><a ui-sref="main">Home</a></li>
                <li><a ui-sref="main">Movies</a></li>
                <li><a ui-sref="main">Details</a></li>
             </ul>
            </div>
        </nav>
        <div ng-app="movieApp" ui-view></div>
        <a ui-sref="details"></a>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.4.2/angular-ui-router.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
        <script src="js/app.js"></script>
        <script src="js/appCtrl.js"></script>
        <script src="js/services/moviefac.js"></script>
        <script src="https://use.fontawesome.com/b1cc4bd830.js"></script>
        <script src="js/appDetailsCtrl.js"></script>

    </body>
</html>
