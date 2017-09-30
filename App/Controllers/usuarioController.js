myApp.controller('usuarioController',['$scope','$http','urlbase','$stateParams', '$window','$rootScope', function($scope,$http,urlbase,$stateParams,$window,$rootScope){
  //$scope.title = title;

    console.log($stateParams);
  if ($stateParams.id_usuario === undefined) {
    $http({
    method: 'GET',
    url: urlbase+'usuarios/'
  }).then(function successCallback(response) {
      $scope.posts = response.data;
    }, function errorCallback(response) {
      console.log(response.statusText);
      // called asynchronously if an error occurs
      // or server returns response with an error status.
    });


    

  }else{
    if ($stateParams.eliminar === "2") {
          console.log("eliminar");
          $http({
        method: 'DELETE',
        url: urlbase+'accesos/'+$stateParams.id_acceso
      }).then(function successCallback(response) {
          alert("Usuario eliminado exitosamente");
          $window.location.href ="http://localhost:8080/SAO/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
        }, function errorCallback(response) {
          console.log(response.statusText);
          // called asynchronously if an error occurs
          // or server returns response with an error status.
        });
    }
    // console.log($stateParams.eliminar);

    if ($stateParams.eliminar === "1") {
              console.log("eliminar");
              $http({
            method: 'DELETE',
            url: urlbase+'usuarios/'+$stateParams.id_usuario
          }).then(function successCallback(response) {
              alert("Usuario eliminado exitosamente");
              $window.location.href ="http://localhost:8080/SAO/Views/index.php#/usuario";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });
    }else{
      $rootScope.selectedAcceso = "";
              $http({
                method: 'GET',
                url: urlbase+'usuarios/accesos/'+$stateParams.id_usuario
                }).then(function successCallback(response) {
                  // $scope.posts = response.data;
                  $rootScope.post1 = response.data;
                  $rootScope.selectedAcceso = $rootScope.post1[0];
                }, function errorCallback(response) {
                  console.log(response.statusText);
                  // called asynchronously if an error occurs
                  // or server returns response with an error status.
                });
                //whatch for getting posts to scope
                $rootScope.$watch('post1',function(){
                  //console.log($rootScope.post1);
                  $scope.post1=$rootScope.post1;
                })
                $rootScope.$watch('selectedAcceso',function(){
                  console.log($rootScope.selectedAcceso);
                  $scope.selectedAcceso=$rootScope.selectedAcceso;
                })




            $http({
            method: 'GET',
            url: urlbase+'usuarios/'+$stateParams.id_usuario
          }).then(function successCallback(response) {
              $scope.posts = response.data[0];
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });
    }
  }
$scope.submit2 = function(id){
  if (id=== undefined) {
    console.log(this.selectedAcceso);
    this.selectedAcceso.ID_usuario=parseInt($stateParams.id_usuario);
    $http({
      method: 'POST',
      url: urlbase+'accesos/',
      data: this.selectedAcceso
    }).then(function successCallback(response) {
        alert("Acceso registrado exitosamente");
        $window.location.href ="http://localhost:8080/SAO/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
      }, function errorCallback(response) {
        console.log(response.statusText);
      });


  }else{
    console.log(this.selectedAcceso);
    this.selectedAcceso.ID_usuario=parseInt($stateParams.id_usuario);
    $http({
      method: 'PUT',
      url: urlbase+'accesos/'+this.selectedAcceso.ID_accesos,
      data: this.selectedAcceso
    }).then(function successCallback(response) {
        alert("Acceso modificado exitosamente");
        $window.location.href ="http://localhost:8080/SAO/Views/index.php#/modificar_usuario/"+$stateParams.id_usuario;
      }, function errorCallback(response) {
        console.log(response.statusText);
      });

  }
}

 $scope.submit = function() {



         if ($stateParams.id_usuario=== undefined) {
           // $scope.list.push(this.text);
          // $scope.text = '';
          console.log(this.data);
          $http({
            method: 'POST',
            url: urlbase+'usuarios/',
            data: this.data
          }).then(function successCallback(response) {
              //console.log(response.statusText);
              alert("Usuario registrado exitosamente");
              $window.location.href ="http://localhost:8080/SAO/Views/index.php#/usuario";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         }else{

          // $scope.list.push(this.text);
          // $scope.text = '';
          console.log("actualizar");
          console.log(this.posts);
          $http({
            method: 'PUT',
            url: urlbase+'usuarios/'+this.posts.ID_usuario,
            data: this.posts
          }).then(function successCallback(response) {
              // console.log(response.statusText);
              alert("Usuario modificado exitosamente");
              //$window.location.href ="http://107.180.66.98:90/SAO/Views/index.php#/usuarios";
              $window.location.href ="http://localhost:8080/SAO/Views/index.php#/usuario";
            }, function errorCallback(response) {
              console.log(response.statusText);
              // called asynchronously if an error occurs
              // or server returns response with an error status.
            });

         };
      };


}]);
