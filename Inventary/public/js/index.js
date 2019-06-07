
var app = angular.module("myApp",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
app.controller("myCtrl", function($scope,$http) {

  $("#fechav").datepicker({
  format: "yyyy-mm-dd"});  

  $("#fechav2").datepicker({
  format: "yyyy-mm-dd"});  


$scope.productos=function(){
var url="http://localhost/inventary/public/index.php/productos"
$http({
  method  : 'GET',
  url     : url,
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      //console.log(response);     
 $scope.products=response;
 
           
}).error(function (response) {
           //console.log(response)
  });   
}

$scope.proveedoresV=function(){
var url="http://localhost/inventary/public/index.php/totalventasprove"
$http({
  method  : 'GET',
  url     : url,
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
           
 $scope.proveedoresV=response['cantidad'];
 
           
}).error(function (response) {
           //console.log(response)
  });   
}


$scope.proveedoresV();

$scope.clientV=function(){
var url="http://localhost/inventary/public/index.php/totalventascli"
$http({
  method  : 'GET',
  url     : url,
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      //console.log(response);     
 $scope.clievs=response['cantidad'];
 
           
}).error(function (response) {
           //console.log(response)
  });   
}
$scope.clientV();



$scope.productos();
$scope.guardar=function(){
 
 var formulariosave = $("#formulario");
 var urlaction = formulariosave.attr('action');
 
 
$http({
  method  : 'POST',
  url     : urlaction,
  data    : formulariosave.serialize(), //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response);     
 $scope.productos();
 formulariosave[0].reset();
           
}).error(function (response) {
           
  });




}

$scope.guardar2=function(){
//provedoresproducsM

//alert('ok')

 var formulariosave = $("#formulario2");
 var urlaction = formulariosave.attr('action');
 
 
$http({
  method  : 'POST',
  url     : urlaction,
  data    : formulariosave.serialize(), //this.formData,  // pass in data as strings
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      alert(response);     
 $scope.productos();
 formulariosave[0].reset();
           
}).error(function (response) {
           
  });




}


$scope.Agregarstock=function(pridproductos){
//alert(pridproductos);

$scope.id=pridproductos;
$("#myModal2").modal();

}

/*stock
NoLote*/


$scope.comprar=function(pridproductos,prvalor,prname,prstock){
$scope.id=pridproductos;
$scope.nameproducto=prname;
$scope.valor=prvalor;
$scope.cantidad="1";
$scope.stock=prstock;
$("#myModal3").modal();

}

$scope.finalizar=function(){
   var formulariosave = $("#formulario3");
 var urlaction = formulariosave.attr('action');
 
//var url="http://localhost/inventary/public/index.php/clientesproductos"
;
$http({
  method  : 'POST',
  url     : urlaction,
  data    : formulariosave.serialize(),
  headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  
   // set the headers so angular passing info as form data (not request payload)
 }).success(function(response){
      console.log(response);     


      $scope.productos();
 //$scope.products=response;
 //alert(response);
           
})  

}


$("#cantidad").on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      console.log('solo numeros');
      //alert('solo se permiten numeros');
    }
});

$('#stock').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      alert('solo se permiten numeros');
    }
});
$('#NoLote').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      alert('solo se permiten numeros');
    }});


//valor

$('#stockm').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      alert('solo se permiten numeros');
    }});

$('#valor').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      alert('solo se permiten numeros');
    }});
$('#NoLotem').on('input', function () { 
    this.value = this.value.replace(/[^0-9]/g,'');
    if(!this.value){
      alert('solo se permiten numeros');
    }});


/*
stockm
NoLotem
*/
});

