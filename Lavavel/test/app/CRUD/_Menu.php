<?php

namespace App\CRUD;

use App\Models\Menu;
use Illuminate\Support\Str;

class _Menu
{
    public function insert($data)
    {
        try {
            Menu::create([
                // 'name'=> 'Nhà Hàng',
                // 'slug'=> Str::slug('Nhà Hàng'),
                // 'mota'=>'Chuyên mục nhà hàng',
                // 'anhien' => true,
                // 'stt' => 0,
                'name' => $data['name'],
                'slug' => Str::slug($data['name']),
                'mota' => $data['mota'],
                'anhien' => $data['anhien'],
                'stt' =>  $data['stt'],
            ]);

            return 'Thêm dữ liệu thành công';
        } catch (\Exception $th) {
            return $th;
        }

        return 'Lỗi thêm dữ liệu';
    }

    // Get all table
    public function getMenuAll()
    {
        return Menu::all();
    }

    // Tìm Kiếm
    public function getMenuSearch($flied, $value)
    {
        return Menu::where($flied, 'like', '%' . $value . '%')->get();
    }

    // Sửa dữ liệu
    public function editData($flied, $value, $newValue)
    {
        try {
            $data =  Menu::where($flied, $value);
            $data->update(['mota' => $newValue]) ;
            return 'Sữa thành công';

        } catch (\Throwable $th) {
            return $th;
        }
       
    }

    // Xóa dữ liệu
    public function deleteData($flied, $value)
    {
        try {
            Menu::where($flied, $value) -> delete();
            return 'Xóa thành công';

        } catch (\Throwable $th) {
            return $th;
        }
       
    }
}
