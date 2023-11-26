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

            
         
            }

            
            public function render(Request $request, $productId) {

                // Get authenticated user
                $userId = auth()->id();
              
                // Find the product 
                $product = product::find($productId);
              
                // Check if this product is already in cart
                $cart = cartModel::where('user_id', $userId)
                           ->where('product_id', $product->id)  
                           ->first();
              
                if($cart) {
              
                  // Product already exists in cart, update quantity  
                  $cart->quantity += 1;
                  $cart->save();
              
                } else {
              
                  // Product not in cart yet, add new cart item
              
                  $cart = new cartModel();
                  $cart->user_id = $userId;
                  $cart->product_id = $product->id;
                  $cart->image = $product->image;  
                  $cart->quantity = 1;
                  $cart->save();
              
                }
              
                // Redirect back to previous page
                return redirect()->back();
              
              }
            public function showCart()
            {
                    $show = cartModel::showCart();
                    return view ("user.cart" ,compact("show"));

                
            }

     


}