<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CRUD\_Menu;
use App\CRUD\_Product;
use App\Models\Product;

class HomeController extends Controller
{
  public  function __construct(_Menu $menu, _Product $product)
  {
    $this->menu = $menu;
    $this->product = $product;
  }
  // view
  public function index()
  {
    // return view('index');
    $data = ($this->menu->getMenuAll());
    return view('index', ['data' => $data]);
  }

  public function about()
  {
    $data = ($this->menu->getMenuAll());
    return view('about', ['data' => $data]);
  }

  public function menu()
  {
    // return view('menu');

    // $data = [
    //   'name' => 'Fries',
    //   'mota' => 'Thực đơn Fries',
    //   'anhien' => true,
    //   'stt' => 4,
    // ];

    //  $this->menu->insert($data);
    // return view('menu', ['data' => $data]);
    $data = ($this->menu->getMenuAll());
    $listproduct = ($this->product->getProductAll());
    return view('menu', ['data' => $data, 'listproduct' => $listproduct]);

    // $data = ($this->menu->getMenuSearch('name','sạn'));
    // return view('menu', ['data' => $data]);

    // $data = ($this->menu->editData('name', 'Nhà Hàng', 'Nhà Hàng 5 sao'));
    // return view('menu', ['data' => $data]);

    // $this->menu->deleteData('name', 'Bánh tráng');
    // $this->product->deleteData('name', 'Bánh tráng');

    // dd($data);
    // $data = ($this->menu->getMenuAll());
    // return view('menu', ['data' => $data]);
  }

  public function book()
  {
    $data = ($this->menu->getMenuAll());
    return view('book', ['data' => $data]);
    // return view('book');
  }

  public function detail($id)
  {
    $data = ($this->menu->getMenuAll());
    $product_detail = Product::find($id);
    return view('detail', ['data' => $data, "product_detail" => $product_detail]);
  }

  public function login()
  {
    return view('admin.login');
  }

  public function register()
  {
    return view('admin.register');
  }

  public function password()
  {
    return view('admin.password');
  }

  public function Adminproduct(Request $request)

  {
    if ($request->isMethod('POST')) {
      $data = $request->input();
      // dd($this->product->create($data));
      $request->validate(
        [
          'name' => 'required |min:3',
          'img' => 'required',
          'gia' => 'required',
          'ttdb1' => 'required',
          'ttdb2' => 'required',
          'loai' => 'required',
          'chitiet' => 'required|min:20',
          'stt' => 'required'
        ],
        [
          "name.required" => 'Không được để trống Tên',
          "name.min" => 'Tên phải có ít nhất 3 ký tự',
          "img.required" => 'Không được để trống Ảnh',
          "gia.required" => 'Không được để trống Giá',
          "ttdb1.required" => 'Không được để trống Ttdb1',
          "ttdb2.required" => 'Không được để trống Ttdb2',
          "loai.required" => 'Không được để trống Loại',
          "chitiet.required" => 'Không được để trống Mô tả',
          "chitiet.min" => 'Mô tả phải có ít nhất 20 ký tự',
          "stt.required" => 'Không được để trống STT',
        ]
      );
      try {
        $result = $this->product->create($data);
        if ($result) {
          $request->session()->flash('success', $result);
        } else {
          $request->session()->flash('error', 'Lỗi thêm dữ liệu!');
        }
      } catch (\Exception $ex) {
        $request->session()->flash('error', $ex);
      }
    }

    return view('admin.product', ['title' => 'Thêm Product']);
  }
}
