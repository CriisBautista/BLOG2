<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller
{
    //

    public function mostrarPublicacion()
    {
        $publi= Publicacion::all();

        
        return view('vista',['vista' => $publi]);
        
    }

    public function verPublicacion($id){
        $publi = Publicacion::find($id);
        if($publi){
            echo $publi->id . '<br>';
            echo $publi->TITULO . '<br>';
            echo $publi->DESCRIPCION . '<br>';
            echo $publi->ARTICULO1. '<br>';
            echo $publi->ARTICULO2. '<br>';
            echo $publi->ARTICULO3. '<br>';
            echo $publi->ARTICULO4. '<br>';
            echo $publi->ARTICULO5. '<br>';
            echo $publi->ARTICULO6. '<br>';
            echo $publi->IMAGEN. '<br>';
            echo $publi->UNIDAD. '<br>';
            echo $publi->slug. '<br>';
        }else{
            echo'No existe';
        }
    }


    public function miPublicacion()
    {
        $publi= Publicacion::all();
            return response()->json(['estatus' => 'Publicacion', 'Publi' => $publi]);
        
    }

    public function verVista1()
    {
        //PUBLICACIONES EN ORDEN
        $publi= Publicacion::all();
        $publicaciones=[];
        foreach($publi as $publicacion)
        {
            $publicaciones[]=
            [
                'id'=>$publicacion['id'],
                'TITULO'=>$publicacion['TITULO'],
                'DESCRIPCION'=>$publicacion['DESCRIPCION'],
                'ARTICULO1'=>$publicacion['ARTICULO1'],
                'ARTICULO2'=>$publicacion['ARTICULO2'],
                'ARTICULO3'=>$publicacion['ARTICULO3'],
                'ARTICULO4'=>$publicacion['ARTICULO4'],
                'ARTICULO5'=>$publicacion['ARTICULO5'],
                'ARTICULO6'=>$publicacion['ARTICULO6'],
                'IMAGEN'=>$publicacion['IMAGEN'],
                'UNIDAD'=>$publicacion['UNIDAD'],
                'slug'=>$publicacion['slug']
            ];
            
        }
        //pUBLICACIONES EN DESORDEN1
        $publi5= Publicacion::where('id', '>', 4)->get();
        $publicaciones5=[];
        foreach($publi5 as $publicacion5)
        {
            $publicaciones5[]=
            [
                'id'=>$publicacion5['id'],
                'TITULO'=>$publicacion5['TITULO'],
                'DESCRIPCION'=>$publicacion5['DESCRIPCION'],
                'ARTICULO1'=>$publicacion5['ARTICULO1'],
                'ARTICULO2'=>$publicacion5['ARTICULO2'],
                'ARTICULO3'=>$publicacion5['ARTICULO3'],
                'ARTICULO4'=>$publicacion5['ARTICULO4'],
                'ARTICULO5'=>$publicacion5['ARTICULO5'],
                'ARTICULO6'=>$publicacion5['ARTICULO6'],
                'IMAGEN'=>$publicacion5['IMAGEN'],
                'UNIDAD'=>$publicacion5['UNIDAD'],
                'slug'=>$publicacion5['slug']
            ];
            
        }
        //pUBLICACIONES EN DESORDEN2
        $publi6= Publicacion::where('id', '>', 6)->get();
        $publicaciones6=[];
        foreach($publi6 as $publicacion6)
        {
            $publicaciones6[]=
            [
                'id'=>$publicacion6['id'],
                'TITULO'=>$publicacion6['TITULO'],
                'DESCRIPCION'=>$publicacion6['DESCRIPCION'],
                'ARTICULO1'=>$publicacion6['ARTICULO1'],
                'ARTICULO2'=>$publicacion6['ARTICULO2'],
                'ARTICULO3'=>$publicacion6['ARTICULO3'],
                'ARTICULO4'=>$publicacion6['ARTICULO4'],
                'ARTICULO5'=>$publicacion6['ARTICULO5'],
                'ARTICULO6'=>$publicacion6['ARTICULO6'],
                'IMAGEN'=>$publicacion6['IMAGEN'],
                'UNIDAD'=>$publicacion6['UNIDAD'],
                'slug'=>$publicacion6['slug'],
                'created_at'=>$publicacion6['created_at']
            ];
            
        }
        //pUBLICACIONES EN DESORDEN3
        $publi7= Publicacion::where('id', '<', 10)->get();
        $publicaciones7=[];
        foreach($publi7 as $publicacion7)
        {
            $publicaciones7[]=
            [
                'id'=>$publicacion7['id'],
                'TITULO'=>$publicacion7['TITULO'],
                'DESCRIPCION'=>$publicacion7['DESCRIPCION'],
                'ARTICULO1'=>$publicacion7['ARTICULO1'],
                'ARTICULO2'=>$publicacion7['ARTICULO2'],
                'ARTICULO3'=>$publicacion7['ARTICULO3'],
                'ARTICULO4'=>$publicacion7['ARTICULO4'],
                'ARTICULO5'=>$publicacion7['ARTICULO5'],
                'ARTICULO6'=>$publicacion7['ARTICULO6'],
                'IMAGEN'=>$publicacion7['IMAGEN'],
                'UNIDAD'=>$publicacion7['UNIDAD'],
                'slug'=>$publicacion7['slug'],
            ];
            
        }

        //pUBLICACIONES subtema1
        $publiSub1= Publicacion::where('id', '<', 10)->get();
        $publicacionesSub1=[];
        foreach($publiSub1 as $publicacionSub1)
        {
            $publicacionesSub1[]=                 
            [
                'id'=>$publicacionSub1['id'],
                'TITULO'=>$publicacionSub1['TITULO'],
                'UNIDAD'=>$publicacionSub1['UNIDAD'],
                'slug'=>$publicacionSub1['slug'],
            ];
            
        }

        //pUBLICACIONES subtema 2
        $publiSub2= Publicacion::where('id', '>=', 10)->where('id', '<', 18)->get();
        $publicacionesSub2=[];
        foreach($publiSub2 as $publicacionSub2)
        {
            $publicacionesSub2[]=                  
            [
                'id'=>$publicacionSub2['id'],
                'TITULO'=>$publicacionSub2['TITULO'],
                'UNIDAD'=>$publicacionSub2['UNIDAD'],
                'slug'=>$publicacionSub2['slug'],
            ];
            
        }

        //pUBLICACIONES subtema 3
        $publiSub3= Publicacion::where('id', '>=', 18)->where('id', '<', 21)->get();
        $publicacionesSub3=[];
        foreach($publiSub3 as $publicacionSub3)
        {
            $publicacionesSub3[]=                  
            [
                'id'=>$publicacionSub3['id'],
                'TITULO'=>$publicacionSub3['TITULO'],
                'UNIDAD'=>$publicacionSub3['UNIDAD'],
                'slug'=>$publicacionSub3['slug'],
            ];
            
        }

        //pUBLICACIONES subtema 4
        $publiSub4= Publicacion::where('id', '>=', 21)->where('id', '<', 26)->get();
        $publicacionesSub4=[];
        foreach($publiSub4 as $publicacionSub4)
        {
            $publicacionesSub4[]=                  
            [
                'id'=>$publicacionSub4['id'],
                'TITULO'=>$publicacionSub4['TITULO'],
                'UNIDAD'=>$publicacionSub4['UNIDAD'],
                'slug'=>$publicacionSub4['slug'],
            ];
            
        }

        //pUBLICACIONES subtema 5
        $publiSub5= Publicacion::where('id', '>=', 26)->where('id', '<', 30)->get();
        $publicacionesSub5=[];
        foreach($publiSub5 as $publicacionSub5)
        {
            $publicacionesSub5[]=                  
            [
                'id'=>$publicacionSub5['id'],
                'TITULO'=>$publicacionSub5['TITULO'],
                'UNIDAD'=>$publicacionSub5['UNIDAD'],
                'slug'=>$publicacionSub5['slug'],
            ];
            
        }

        //pUBLICACIONES subtema 6
        $publiSub6= Publicacion::where('id', '>=', 30)->where('id', '<', 33)->get();
        $publicacionesSub6=[];
        foreach($publiSub6 as $publicacionSub6)
        {
            $publicacionesSub6[]=                  
            [
                'id'=>$publicacionSub6['id'],
                'TITULO'=>$publicacionSub6['TITULO'],
                'UNIDAD'=>$publicacionSub6['UNIDAD'],
                'slug'=>$publicacionSub6['slug'],
            ];
            
        }
        if($publi){
            return view('index',['publi' => $publicaciones, 'publi5' => $publicaciones5, 'publi6' => $publicaciones6, 'publi7' => $publicaciones7, 
        'publiSub1' => $publicacionesSub1, 'publiSub2' => $publicacionesSub2, 'publiSub3' => $publicacionesSub3, 
        'publiSub4' => $publicacionesSub4, 'publiSub5' => $publicacionesSub5, 'publiSub6' => $publicacionesSub6]);
        }else{
            return view('404');
        }
        
    }

    public function tema($slug){
        //PUBLICACIONES EN ORDEN
        $publit= Publicacion::where('slug',$slug)->first();
        $numero=rand(1,31);
        $publiAl= Publicacion::where('id', $numero)->first();
        $numero2=rand(1,31);
        $publiAl2= Publicacion::where('id', $numero2)->first();
        $numero3=rand(1,31);
        $publiAl3= Publicacion::where('id', $numero3)->first();

         //pUBLICACIONES subtema1
         $publiSub1= Publicacion::where('id', '<', 10)->get();
         $publicacionesSub1=[];
         foreach($publiSub1 as $publicacionSub1)
         {
             $publicacionesSub1[]=                 
             [
                 'id'=>$publicacionSub1['id'],
                 'TITULO'=>$publicacionSub1['TITULO'],
                 'UNIDAD'=>$publicacionSub1['UNIDAD'],
                 'slug'=>$publicacionSub1['slug'],
             ];
             
         }
 
         //pUBLICACIONES subtema 2
         $publiSub2= Publicacion::where('id', '>=', 10)->where('id', '<', 18)->get();
         $publicacionesSub2=[];
         foreach($publiSub2 as $publicacionSub2)
         {
             $publicacionesSub2[]=                  
             [
                 'id'=>$publicacionSub2['id'],
                 'TITULO'=>$publicacionSub2['TITULO'],
                 'UNIDAD'=>$publicacionSub2['UNIDAD'],
                 'slug'=>$publicacionSub2['slug'],
             ];
             
         }
 
         //pUBLICACIONES subtema 3
         $publiSub3= Publicacion::where('id', '>=', 18)->where('id', '<', 21)->get();
         $publicacionesSub3=[];
         foreach($publiSub3 as $publicacionSub3)
         {
             $publicacionesSub3[]=                  
             [
                 'id'=>$publicacionSub3['id'],
                 'TITULO'=>$publicacionSub3['TITULO'],
                 'UNIDAD'=>$publicacionSub3['UNIDAD'],
                 'slug'=>$publicacionSub3['slug'],
             ];
             
         }
 
         //pUBLICACIONES subtema 4
         $publiSub4= Publicacion::where('id', '>=', 21)->where('id', '<', 26)->get();
         $publicacionesSub4=[];
         foreach($publiSub4 as $publicacionSub4)
         {
             $publicacionesSub4[]=                  
             [
                 'id'=>$publicacionSub4['id'],
                 'TITULO'=>$publicacionSub4['TITULO'],
                 'UNIDAD'=>$publicacionSub4['UNIDAD'],
                 'slug'=>$publicacionSub4['slug'],
             ];
             
         }
 
         //pUBLICACIONES subtema 5
         $publiSub5= Publicacion::where('id', '>=', 26)->where('id', '<', 30)->get();
         $publicacionesSub5=[];
         foreach($publiSub5 as $publicacionSub5)
         {
             $publicacionesSub5[]=                  
             [
                 'id'=>$publicacionSub5['id'],
                 'TITULO'=>$publicacionSub5['TITULO'],
                 'UNIDAD'=>$publicacionSub5['UNIDAD'],
                 'slug'=>$publicacionSub5['slug'],
             ];
             
         }
 
         //pUBLICACIONES subtema 6
         $publiSub6= Publicacion::where('id', '>=', 30)->where('id', '<', 33)->get();
         $publicacionesSub6=[];
         foreach($publiSub6 as $publicacionSub6)
         {
             $publicacionesSub6[]=                  
             [
                 'id'=>$publicacionSub6['id'],
                 'TITULO'=>$publicacionSub6['TITULO'],
                 'UNIDAD'=>$publicacionSub6['UNIDAD'],
                 'slug'=>$publicacionSub6['slug'],
             ];
             
         }

        if($publit){
            return view('tema', ['publit' => $publit, 'publiAl' => $publiAl, 'publiAl2' => $publiAl2, 'publiAl3' => $publiAl3, 'publiSub1' => $publicacionesSub1, 'publiSub2' => $publicacionesSub2, 'publiSub3' => $publicacionesSub3, 
            'publiSub4' => $publicacionesSub4, 'publiSub5' => $publicacionesSub5, 'publiSub6' => $publicacionesSub6]);
        }else{
            return view('404');
        }
        
    }

    
}
