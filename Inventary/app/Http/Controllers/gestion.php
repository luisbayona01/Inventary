<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\ventas;
class gestion extends Controller
{
   
   public function index(){

   return view('welcome');
   }

   public   function provedores(){
  //return "hola";
   	return  view('proveedores');
   }

   public  function productos(){
    $productos= productos::all();   
    return response()->json($productos);
 
   }

 public function clientes(){
 return view('cliente');

 }

   public   function guardarproductos(Request $request){
    
   $productos= new productos();

  /*

    [_token] => uiuBonasbBkFds5byeSnsArP5F1YjdKji6cgQiXZ
    [nombreproducto] => as
    [Stock] => as
    [fechavencimiento] => as
    [Nlote] => as
)
  */

  $nombreproducto= $request->input("nombreproducto");
  $stock= $request->input("Stock");
  $fechavencimiento=$request->input("fechavencimiento");
  $Nlote=$request->input("Nlote");
  $valor=$request->input("valor");
 

 /*
name
stock
fechavencimiento
nlote
 */
 $productos->name=$nombreproducto;
 $productos->stock=$stock;
 $productos->fechavencimiento=$fechavencimiento;
 $productos->nlote=$Nlote;
 $productos->valor=$valor;

  if($productos->save()){
  	echo "operacion exitosa";
  

  
 $ventas=ventas::where('tipouser',$request->input('tipouser'))->first();
  //print_r($ventas);
  if($ventas['tipouser']!=0){
    
  	$vtn = ventas::find($request->input('tipouser'));

     $tlt= $ventas['cantidad'] + $request->input("Stock");
     echo $tlt;
     $ventas->cantidad=$tlt;
  $ventas->save();
  }else{

  	//echo "up";

    $ventas=new ventas();
    $ventas->tipouser=$request->input('tipouser');  
    $ventas->cantidad=$request->input('Stock');
   $ventas->save();
  }

 //echo 'creado  el articulo  con id:'. $productos->idproductos;
}

   }

public  function edit(request $request){

//$usuarios =new Usuarios();

$id= $request->input('idproductos');
$contend=productos::where('idproductos',$request->input('idproductos'))->first();
$mas=$contend['stock']+ $request->input("Stock");
$productos = productos::find($id);	

  $stock= $mas;
  $fechavencimiento=$request->input("fechavencimiento");
  $Nlote=$request->input("Nlote");

 $productos->stock=$stock;
 $productos->fechavencimiento=$fechavencimiento;
 $productos->nlote=$Nlote;


	


	if($productos->save()){

  echo "operacion  exitosa";


   $ventas=ventas::where('tipouser',$request->input('tipouser'))->first();
  //print_r($ventas);
  if($ventas['tipouser']!=0){
    
  	$vtn = ventas::find($request->input('tipouser'));

     $tlt= $ventas['cantidad'] + $stock;
     //echo $tlt;
     $ventas->cantidad=$tlt;
  $ventas->save();
  }else{

  	//echo "up";

    $ventas=new ventas();
    $ventas->tipouser=$request->input('tipouser');  
    $ventas->cantidad=$request->input('Stock');
   $ventas->save();


	}



}

}

public  function editclip(request $request){

  
 $id=$request->input ('idproductos'); 
 $request->input('stock');  
    
$productos = productos::find($id);	
$stockmenos=$request->input('stock') - $request->input('cantidad');
$productos->stock=$stockmenos;  
if($productos->save()){

  echo "operacion  exitosa";


$ventas=ventas::where('tipouser',$request->input('tipousuarios'))->first();
  //print_r($ventas);
  if($ventas['tipouser']!=0){
    
  	$vtn = ventas::find($request->input('tipousuarios'));

     $tlt=$request->input('cantidad') +$ventas['cantidad']; 
     //echo $tlt;
     $ventas->cantidad=$tlt ;
  $ventas->save();
  }else{

  	//echo "up";

    $ventas=new ventas();
    $ventas->tipouser=$request->input('tipousuarios');  
    $ventas->cantidad=$request->input('cantidad');
   $ventas->save();


	}
}
}

public  function totalVclientes(){
$ventas=ventas::where('tipouser','1')->first();
return response()->json($ventas);

}

public  function totalVproveedore(){
$ventas=ventas::where('tipouser','2')->first();
return response()->json($ventas);

	
}


}
