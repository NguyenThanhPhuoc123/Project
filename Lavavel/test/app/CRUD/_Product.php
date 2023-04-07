<?php

namespace App\CRUD;

use App\Models\Product;
use Illuminate\Support\Str;

class _Product
{
    public function create($data)
    {
        try {
            $result = Product::create([
                // 'name'=> 'Nhà Hàng',
                // 'slug'=> Str::slug('Nhà Hàng'),
                // 'mota'=>'Chuyên mục nhà hàng',
                // 'anhien' => true,
                // 'stt' => 0,
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'img' => $data['img'],
                'gia' => $data['gia'],
                'anhien' => $data['anhien'],
                'ttdb1' =>  $data['ttdb1'],
                'ttdb2' => $data['ttdb2'],
                'loai' =>  Str::slug($data['loai']),
                'chitiet' =>  $data['chitiet'],
                'stt' => $data['stt'],
            ]);

            if ($result)
                return 'Thêm dữ liệu thành công';
            return 'Thêm dữ liệu lỗi';
        } catch (\Exception $th) {
            return $th;
        }

        return 'Lỗi thêm dữ liệu';
    }

    // Get all table
    public function getProductAll()
    {
        return Product::all();
    }
    
    // Xóa dữ liệu
    public function deleteData($flied, $value)
    {
        try {
            Product::where($flied, $value)->delete();
            return 'Xóa thành công';
        } catch (\Throwable $th) {
            return $th;
        }
    }
}
