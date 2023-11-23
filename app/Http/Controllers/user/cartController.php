<?php

    namespace App\Http\Controllers\user;

    use App\Http\Controllers\Controller;
    use App\Models\user\CartItemModel;
    use Auth;
    use Illuminate\Http\Request;
    use App\Models\user\cartModel;
    use App\Http\Requests\cartRequest;
    use App\Models\user\product;
    use App\Models\User;

class cartController extends Controller
{
        protected $cartModel;
        protected $productModel;

        protected $user ;

        public function __construct(cartModel $cartModel, product $productModel , User $user)
        {
            $this->cartModel = $cartModel;
            $this->product= $productModel;
            $this->User = $user ;

        
        // Thêm tour vào giỏ hàng
        }

        
        public function render(Request $request ,string $id)
        {

            $id_user = Auth::user()->id;
            
            $cart = new cartModel() ;
            $product = product::find($id);
            $cart->user_id = $id_user;
            $cart->product_id = $id;
            $cart->quantity = 1;
            $cart->save();
            return redirect()->back();
        }


  }