angular.module('ForEx', [])
    .controller('ConvertCtrl', ['$scope', '$http', function($scope, $http) {
        $scope.rates = {};
        $http.get('http://api.fixer.io/latest?base=ZAR;symbols=USD,CNY,MXN,EUR')
            .then(function(res) {
                $scope.rates = res.data.rates;
                $scope.toType = $scope.rates.EUR;
                $scope.fromType = $scope.rates.USD;
                $scope.fromValue = 1;
                $scope.forExConvert();
            });
        $scope.forExConvert = function() {
            $scope.toValue = $scope.fromValue * ($scope.toType * (1 / $scope.fromType));
            $scope.toValue = $scope.toValue.toFixed(2);
        };
    }]);