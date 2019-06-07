@extends('layouts.app')


@section('content')


<div class="container">
               
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <h1>Productos</h1>
                   <table class="table table-border">
                     <thead>
                     <tr>
                
                       <th>Nombre</th>
                       <th>Stock</th>
                       <th>Fechavencimiento</th>
                       <th>Nolote</th>
                       <th>valor</th> 
                       <th>comprar</th> 
                     </tr>    
                     </thead>  
                     <tbody>
                      <tr ng-repeat="pr in products">
                        <td><% pr.name  %></td>
                        <td><% pr.stock  %></td>
                        <td><% pr.fechavencimiento %></td>
                        <td><% pr.nlote %></td>
                        <td><% pr.valor %></td>
                        <td><button type="button" class=" btn btn-info" ng-click="comprar(pr.idproductos,pr.valor,pr.name,pr.stock)">comprar</button> </td>

                      </tr>   
                     </tbody>

                   </table>

           
                    
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">comprar</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        {!! Form::open(array('url'=>'/clientesproductos','method'=>'post', 'id'=>'formulario3')) !!}  
         <div class="form-group">
           <input type="text" name="cantidad" id="cantidad" ng-model="cantidad" class="form-control" placeholder=" digite la cantidad a comprar">
            </div>
      <input type="hidden" name="idproductos" id="idproductos" value="<% id %>">
      <input type="hidden" name="stock" id="stock" value="<% stock %>">
      <input type="hidden" name="tipousuarios" id="tipousuarios" value="1">
        <table  class="table  table-border">
         <thead>
         <tr>
         <th>Descripcion</th>
         <th>Cantidad</th>
         <th>subtotal</th>
        </tr> 
         </thead>
        <tbody>
         <td><% nameproducto %></td>
         <td><% cantidad %></td>
         <td><% valor * cantidad %></td> 

        </tbody> 

        </table>




        </div>
        <button type="button"  class="btn btn-info" ng-click="finalizar()">finalizar compra</button>
          {!! Form::close() !!}  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cancelar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>




@endsection