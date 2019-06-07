@extends('layouts.app')


@section('content')


<div class="container">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">agregar un producto</button>
               
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
                       <th>agregar Stock</th> 
                     </tr>    
                     </thead>  
                     <tbody>
                      <tr ng-repeat="pr in products">
                        <td><% pr.name  %></td>
                        <td><% pr.stock  %></td>
                        <td><% pr.fechavencimiento %></td>
                        <td><% pr.nlote %></td>
                        <td><button type="button" class=" btn btn-info" ng-click="Agregarstock(pr.idproductos)"> Agregar Stock </button> </td>

                      </tr>   
                     </tbody>

                   </table>

           
                    
                </div>
            </div>
        </div>
    </div>



</div>


<!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Guardar productos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        {!! Form::open(array('url'=>'/provedoresproducs','method'=>'post', 'id'=>'formulario')) !!}
         <div class="form-group row">

    <input type="hidden" name="tipouser"value="2">

    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre producto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombreproducto" id="inputEmail3" placeholder="Nombre producto">
    </div>

  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Stock" id="stock" placeholder="Stock">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">fechavencimiento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fechav" name="fechavencimiento" placeholder="fechavencimiento" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No Lote</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Nlote" id="NoLote" placeholder="NoLote" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="valor" id="valor" placeholder="valor" value="">
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="button" ng-click="guardar()" class="btn btn-primary">guardar</button>
    </div>
  </div>
  
     
     {!! Form::close() !!}  
     </div>
          <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  
</div>



 <div class="modal" id="myModal2">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Actualisar stock</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        {!! Form::open(array('url'=>'/provedoresproducsM','method'=>'post', 'id'=>'formulario2')) !!}
       

    <input type="hidden" name="tipouser"value="2">
    <input type="hidden" name="idproductos" id=" idproductos"value="<%id%>">
  
 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Stock</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Stock" id="stockm" placeholder="Stock">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">fechavencimiento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="fechav2" name="fechavencimiento" placeholder="fechavencimiento" value="">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">No Lote</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Nlote" id="NoLotem" placeholder="NoLote" value="">
    </div>
  </div>

  
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="button" ng-click="guardar2()" class="btn btn-primary">guardar</button>
    </div>
  </div>
  
     
     {!! Form::close() !!}  
     </div>
          <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  
</div>

@endsection
