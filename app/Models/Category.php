<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected  $table = "categories";

    protected $guarded = [];

    public function parent(){
        return $this->belongsTo(Category::class);
    }

    public function articles()
    {
        return $this->hasMany('App\Models\Article');
    }

    public function hasChilds(){
        $childs = Category::where('parent_id',$this->id)->get();
        if (count($childs) > 0){
            return true;
        }else{
            return false;
        }
    }

    public function getEnabled(){
        if ($this->enabled == true) {
            return '是';
        }else{
            return '否';
        }
    }

    //透過分類Id來尋找屬於該分類的子分類
    public function scopeParentCategory( $query , $Category_id )
    {
        if ($Category_id != 'none') {
            return $query->where('parent_id', $Category_id);
        }else{
            return $query;
        }

    }

    /**
     * 限制查詢只包括某種啟動狀態的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param enabled 文件啟動狀態
     */
    public function scopeEnabled( $query , $enabled )
    {
        if ($enabled != 'none') {
            return $query->where('enabled',$enabled );
        }else{
            return $query;
        }
    }
}
