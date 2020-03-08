<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $primaryKey = '<tên khóa chính>'; ---- Khai báo khóa chính cho bảng trong DB
    protected $fillable = [
        'title','category_id', 'content', 'time',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function category(){
        return $this->belongsTo(Cate::class, 'id');
    }

    public function getCateName(){
		$cate = Cate::where('id', '=', $this->category_id)->first();
		if($cate != null){
			return $cate->name;
		}
		return "";
	}
}
