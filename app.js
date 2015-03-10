function myCtrl($scope, $http) {

    $scope.variabel = 4;

    $scope.templates =
            [{name: 'body.html', url: 'views/body.html'},
                {name: 'eos5d.html', url: 'views/eos5d.html'},
                {name: '35tak.html', url: 'views/35tak.html'},
                {name: '55chinon.html', url: 'views/55chinon.html'}];
            
    $scope.template = $scope.templates[0];

    $scope.viewHome = function () {                            //Index
        $scope.template = $scope.templates[0];
    }
    $scope.view5D = function () {                            
        $scope.template = $scope.templates[1];
    }
    $scope.view35Tak = function () {                            
        $scope.template = $scope.templates[2];
    }
    $scope.view55Chin = function () {                            
        $scope.template = $scope.templates[3];
    }

    function pictures() {

        $scope.url = 'pictures.php';

        $http.post($scope.url, {"data": $scope.keywords}).
                success(function (data) {

                    
                    var arr = new Array;
                    var datat = data;
                  
                    for (var i = 0; i < datat.entry.length; i++) {
                        arr[i] = datat.entry[i].content['@attributes'].src;
                    }
                    $scope.result = arr; 
                });
    }

    var init = function () {
        pictures();
    };

    init();

}

