<?php

namespace App\Http\Controllers;

use App\Cate;
use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\ProductImage;
use Request;

//use Illuminate\Http\Request; // Tắt nếu sử dụng ajax

class ProductController extends Controller
{
    public function getAdd()
    {
        $cate = Cate::select('id', 'name', 'parent_id')->get();
        return view('admin.product.add')->with('cate', $cate);
    }

    public function postAdd(ProductRequest $productRequest)
    {
        $product = new Product();

        $product->name = $productRequest->txtName;
        $product->alias = strToSlug($productRequest->txtName);
        $product->price = $productRequest->txtPrice;
        $product->intro = $productRequest->txtIntro;
        $product->content = $productRequest->txtContent;

        $file = $productRequest->file('fImages');
        if (isset($file)) {
            $file_name = $file->getClientOriginalName();
            $product->image = $file_name;
            $file->move('resources/upload/', $file_name);
        }

        $product->keywords = $productRequest->txtKeywords;
        $product->description = $productRequest->txtDescription;
        $product->user_id = 1;
        $product->cate_id = $productRequest->sltCate;
        $product->save();

        //Lưu Product Image
        $product_id = $product->id;
        $pFiles = $productRequest->file('fProductDetail');
        foreach ($pFiles as $pFile) {
            $product_image = new ProductImage();
            if (isset($pFile)) {
                $pFile_name = $pFile->getClientOriginalName();
                $product_image->image = $pFile_name;
                $product_image->product_id = $product_id;
                $pFile->move('resources/upload/detail/', $pFile_name);
                $product_image->save();
            }
        }
        return redirect()->route('admin.product.getList')
            ->with(['level' => 'success', 'flash_message' => 'Thêm thành công!']);
    }

    public function getList()
    {
        $products = Product::select('id', 'name', 'price', 'cate_id', 'created_at')->orderBy('id', 'DESC')->get();
        return view('admin.product.list')
            ->with('products', $products)
            ->with('i', 1);
    }

    public function getDelete($id)
    {
//        1. Xóa product
//        2. Xóa image của Product đó
//        3. Xóa image trong bảng Product_Images

//      Xóa ảnh trong Product_Image
        $productImages = Product::find($id)->productImage;
        foreach ($productImages as $productImage) {
            \File::delete('resources/upload/detail/' . $productImage->image);
        }
//      Xóa ảnh trong Product
        $product = Product::find($id);
        \File::delete('resources/upload/' . $product->image);
//      Nếu xóa record Product thành công -> xóa luôn product_Image
//      (relation: xóa cha-> con xóa theo)
        $product->delete();
        return redirect()->route('admin.product.getList')
            ->with(['level' => 'success', 'flash_message' => 'Xóa thành công!']);
    }

    public function getEdit($id)
    {
        $product = Product::find($id);
        $cate = Cate::select('id', 'name', 'parent_id')->get();
        $productImages = Product::find($id)->productImage;
        return view('admin.product.edit')
            ->with('cate', $cate)
            ->with('product', $product)
            ->with('productImages', $productImages);
    }

    public function postEdit($id, Request $request)
    {
        $product = Product::find($id);
        $product->name = Request::input('txtName');
        $product->alias = strToSlug(Request::input('txtName'));
        $product->price = Request::input('txtPrice');
        $product->intro = Request::input('txtIntro');
        $product->content = Request::input('txtContent');

        if (!empty(Request::file('fImages'))) {
//      Có thay đổi file hình
            $file = Request::file('fImages');
            $file_name = $file->getClientOriginalName();
            $file->move('resources/upload/', $file_name);
//            Xóa file cũ
            $delImg = 'resources/upload/' . $product->image;
            if (\File::exists($delImg)) {
                \File::delete($delImg);
            }
//            Lưu tên file mới
            $product->image = $file_name;
        }

        $product->keywords = Request::input('txtKeywords');
        $product->description = Request::input('txtDescription');
        $product->user_id = 1;
        $product->cate_id = Request::input('sltCate');
        $product->save();

//      Thêm hình ảnh detail
        


        return redirect()->route('admin.product.getList')
            ->with(['level' => 'success', 'flash_message' => 'Cập nhật thành công!']);
    }

//    Dùng ajax để xóa hình ảnh detail
    public function getDelImg($id)
    {
        if (Request::ajax()) {
            $idImg = (int)Request::get('idImg');
            $productImage = ProductImage::find($idImg);
            if (!empty($productImage)) {
                $delImg = 'resources/upload/detail/' . $productImage->image;
                if (\File::exists($delImg)) {
                    \File::delete($delImg);
                }
                $productImage->delete();
            }
            return "OK";
        }
    }
}
