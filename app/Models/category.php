<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public static function tree(){

        $allCategories = category::get();

        $rootCategories =  $allCategories->whereNull('parent_id');

        foreach ($rootCategories as $rootCategory){
            $rootCategory->children = $allCategories->where('parent_id', $rootCategory->id)->values();
            foreach ($rootCategory->children as $child){
                $child->child = $allCategories->where('parent_id', $child->id)->values();
            }

        }
      //  return $rootCategories;
//        foreach ($rootCategories as $cats){
//        if ($cats->children != null){
//            $rootCategories->children;
//           }
//        }
      //  return $rootCategories[4]['children'][6]['child'];
       // $rootCategories['children'];
        foreach ($rootCategories as $key => $value ){
            //echo $key.'='. $value;
            foreach ($value['children'] as $key => $child){
             //   echo $key.'='.$child;
            }
        }

    }
}
