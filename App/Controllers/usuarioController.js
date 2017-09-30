myApp.controller('usuarioController',['$scope','$http','urlbase','$stateParams', '$window','$rootScope', function($scope,$http,urlbase,$stateParams,$window,$rootScope){

  if ($stateParams.id_usuario === undefined) {

    $http({
      method: 'GET',
      url: urlbase+'usuarios/'
    }).then(function successCallback(response) {
      $scope.posts = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
    });

  }else{

    if ($stateParams.eliminar === "2") {

      $http({
        method: 'DELETE',
        url: urlbase+'accesos/'+$stateParams.id_acceso
      }).then(function successCallback(response) {
        alert("Usuario eliminado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    }

    if ($stateParams.eliminar === "1") {
      $http({
        method: 'DELETE',
        url: urlbase+'usuarios/'+$stateParams.id_usuario
      }).then(function successCallback(response) {
        alert("Usuario eliminado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/usuario";
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    }else{
      $rootScope.selectedAcceso = "";
      $http({
        method: 'GET',
        url: urlbase+'usuarios/accesos/'+$stateParams.id_usuario
      }).then(function successCallback(response) {
        $rootScope.post1 = response.data;
        $rootScope.selectedAcceso = $rootScope.post1[0];
      }, function errorCallback(response) {
        console.log(response.statusText);
      });
      //whatch for getting posts to scope
      $rootScope.$watch('post1',function(){
        $scope.post1=$rootScope.post1;
      })
      $rootScope.$watch('selectedAcceso',function(){
        $scope.selectedAcceso=$rootScope.selectedAcceso;
      })
      $http({
        method: 'GET',
        url: urlbase+'usuarios/'+$stateParams.id_usuario
      }).then(function successCallback(response) {
        $scope.posts = response.data[0];
      }, function errorCallback(response) {
        console.log(response.statusText);
      });
    }
  }
  $scope.submit2 = function(id){

    if (id=== undefined) {

      this.selectedAcceso.ID_usuario=parseInt($stateParams.id_usuario);
      $http({
        method: 'POST',
        url: urlbase+'accesos/',
        data: this.selectedAcceso
      }).then(function successCallback(response) {
        alert("Acceso registrado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    }else{

      this.selectedAcceso.ID_usuario=parseInt($stateParams.id_usuario);
      $http({
        method: 'PUT',
        url: urlbase+'accesos/'+this.selectedAcceso.ID_accesos,
        data: this.selectedAcceso
      }).then(function successCallback(response) {
        alert("Acceso modificado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    };
  };

  $scope.submit = function() {

    if ($stateParams.id_usuario=== undefined) {

      $http({
        method: 'POST',
        url: urlbase+'usuarios/',
        data: this.data
      }).then(function successCallback(response) {
        alert("Usuario registrado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/usuario";
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    }else{

      $http({
        method: 'PUT',
        url: urlbase+'usuarios/'+this.posts.ID_usuario,
        data: this.posts
      }).then(function successCallback(response) {
        alert("Usuario modificado exitosamente");
        $window.location.href ="http://localhost:8080/apok/Views/index.php#/usuario";
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

    };
  };


}]);
