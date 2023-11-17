<?php

    namespace App\Http\Controllers\user;

    use App\Http\Controllers\Controller;
    use App\Models\user\CartItemModel;
    use Illuminate\Http\Request;
    use App\Models\user\cartModel;
    use App\Http\Requests\cartRequest;
    use App\Models\user\product;

class cartController extends Controller
{
        protected $cartModel;
        protected $productModel;

        public function __construct(cartModel $cartModel, product $productModel)
        {
            $this->cartModel = $cartModel;
            $this->product= $productModel;

        
        // Thêm tour vào giỏ hàng
        }
        public function addCart(cartRequest $request)
        {
            $product = product::find(($request->product_id));
        

            if($request->hasFile("image")){
                $image = $request->file("image");
                $path = $image->store("uploads","public");
            }
            $datalist = [
                "image" =>$path ?? null   ,
                "price"=>$request->price,
                "product_id"=> $product->id,
                "user_id"=> auth()->user()->id ,
                "quantity"=> $request->quantity,
            ];            

            cartModel::addtoCart($datalist);
            return view("user.showTour",compact("product"));
        }

        public function cart()
        {
            $cartItems = cartModel::showCart();
            return view('user.cart', ['cartItems' => $cartItems]);
        }


  }