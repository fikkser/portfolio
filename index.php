<!DOCTYPE html>
<html ng-app>

    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" charset="utf-8"></script>
        <link rel="stylesheet" type="text/css" href="css.css">
        <script src="app.js"></script>
 
    </head>

    <body ng-controller="myCtrl">

        <div class="container" id="container">
            <div id="header" ng-include="'header.html'"></div>
            <div class="row" id="row">

                <div id="slideShow" class="col-md-12">
                    <div id="slidePics" class="col-md-3 col-sm-3 col-bg-3 col-xs-3" ng-repeat="item in result">
                        <img id="slidePic" class="img-responsive" src=" {{item}}" />
                    </div> 
                </div>
            </div> <!-- /row -->
            <div id="bdy" ng-include="template.url"><!-- body --></div>  
        </div>
    </body>
</html>