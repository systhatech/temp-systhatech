<?php
 /**
 * THIS INTELLECTUAL PROPERTY IS COPYRIGHT Ⓒ 2020
 * SYSTHA TECH LLC. ALL RIGHT RESERVED
 * -----------------------------------------------------------
 * sales@systhatech.com 
 * 512 903 2202
 * www.systhatech.com
 * -----------------------------------------------------------
*/


namespace Systha\systhatech\Helpers;

use Illuminate\Support\Facades\DB;

class CmsHelper{

    public static function menu($menu){
        $menu_sort= array();
        foreach ($menu as $k => $v) {
            if(!isset($v->parent_id)){      
                $menu_sort[$v->id] = $v;
            }
        }
        foreach ($menu as $k => $v) {
            if(isset($v->parent_id) && $v->parent_id !=0){
               if(!isset( $menu_sort[$v->parent_id]->child )){
                    $menu_sort[$v->parent_id]->child = array();
                } else {
                    $a=  $menu_sort[$v->parent_id]->child;
                    $a[$v->id] = $v;
                   $menu_sort[$v->parent_id]->child= $a ;
                }
          }
        }
   
        return $menu_sort;
    
    }

    public static function menufooter($menu,$menu_type=false, $parent=false){
     
        if($menu_type==false){
            $menu_type="footer";
        }
        $menu_sort= array();
        foreach ($menu as $k => $v) {
            if($v->location_footer==strtolower($menu_type)){
                if(!isset($v->parent_id)){      
                    $menu_sort[$v->id] = $v;
                } 
            }
        }
        if($parent){
            foreach ($menu as $k => $v) {
                if(isset($v->parent_id) && $v->parent_id!=0){
                   if(!isset( $menu_sort[$v->parent_id]->child )){
                        $menu_sort[$v->parent_id]->child = array();
                    } else {
                        $a=  $menu_sort[$v->parent_id]->child;
                        $a[$v->id] = $v;
                       $menu_sort[$v->parent_id]->child= $a ;
                    }
              }
            }    
        }
   
        return $menu_sort;
    
    }

    public static function menuheader($menu,$menu_type=false, $parent=false){
     
        if($menu_type==false){
            $menu_type="header";
        }
        $menu_sort= array();
        foreach ($menu as $k => $v) {
           // dd($v);
            if($v->menu_location==strtolower($menu_type)){
                if(!isset($v->parent_id) || $v->parent_id==0 ){      
                    $menu_sort[$v->id] = $v;
                } 
            }
        }
        if($parent){
            foreach ($menu as $k => $v) {
                if(isset($v->parent_id) || $v->parent_id!=0){
                   if(!isset( $menu_sort[$v->parent_id]->child )){
                        $menu_sort[$v->parent_id]->child = array();
                    } else {
                        $a=  $menu_sort[$v->parent_id]->child;
                        $a[$v->id] = $v;
                       $menu_sort[$v->parent_id]->child= $a ;
                    }
              }
            }    
        }
   
        return $menu_sort;
    }
    

    public static function menu_group_by_parent($menu, $group_key){
        $result = array();
        foreach($menu as $val) {
            if(array_key_exists($group_key, $val)){
                $result[$val[$group_key]][] = $val;
            }else{
                $result[""][] = $val;
            }
        } 
        return $result;
    }

    public static function menu_get_parent_group($menu, $menu_code){
        
       // $menu = $menu->toArray();

        $result = array();
        foreach($menu as $key=> $val) {
                if($val['parent_id']== $menu_code){
                    array_push($result,$val);
                }
        } 
        $re= array();
        $re['ref'] =$result;

        return $re;
    }

    public static function splitbykey($data, $key, $type){
        
        $date = $data->toArray();
        $result = array();
        foreach($data as $k=> $v) {
                if($v[$key]== $type){
                       array_push($result,$val);
                }
        } 

        return $result;
    }

    
    public static function group_by_cato($menu, $group_key, $comp_type=false){
        
      //  $menu = $menu->toArray();
        $result = array();
        foreach($menu as $m=>$z) :
              $m= $z->posts->toArray();
                foreach($m as $val) :
                    if(array_key_exists($group_key, $val)){
                        $result[$z->component_name][$val[$group_key]][] = $val;
                    }else{
                        $result[""][] = $val;
                   }
                endforeach;
        endforeach ; 

        if($comp_type && isset($result[$comp_type])){
            return $result[$comp_type];
        }

        return $result;
    }



}