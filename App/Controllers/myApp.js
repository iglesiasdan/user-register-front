'use strict';
var myApp = angular.module('myApp',['ngRoute','ui.router']).factory('$exeptionHandler',
  function(){
    return function(exception, cause) {
      exception.message += 'Angular Exception: "' + cause + '"';
      throw exception;
  };
});





myApp.config(function ($stateProvider, $urlRouterProvider) {
     var baseUrl = "http://localhost:3000/";
     $urlRouterProvider.when("/", "/inicio");

     $stateProvider
        .state("inicio", {
            url: "/inicio",
            views: {
                '':{  templateUrl: "../Views/Pages/home.php"}
            }

        })
        .state("usuario", {
            url:"/usuario",
            templateUrl: "../Views/Pages/table_usuario.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        
        
        
       
        
        
         
        .state("eliminar_acceso", {
            url:"/eliminar_acceso/:id_usuario/:id_acceso/:eliminar",
            //templateUrl: "../Views/Pages/table_acceso.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        
        
        .state("agregar_usuario", {
            url:"/agregar_usuario",
            templateUrl: "../Views/Pages/agregar_usuario.php",
            controller:"usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
        .state("modificar_usuario", {
            url:"/modificar_usuario/:id_usuario",
            templateUrl: "../Views/Pages/modificar_usuario.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
         .state("eliminar_usuario", {
            url:"/eliminar_usuario/:id_usuario/:eliminar",
            //templateUrl: "../Views/Pages/eliminar_puerto.php",
            controller: "usuarioController",
            resolve: {
              urlbase: function () {
                return baseUrl;
              }
            }
        })
});
