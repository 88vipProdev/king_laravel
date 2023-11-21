import React, { useState, useEffect } from 'react';
import axios from 'axios';

export type Products = {

  name :string ;
  img : string ; 
  location : string ;
  price : number ;
 

}
const ProductTSX: React.FC<{products: Products[]}> = ({products})=>{
    const [Products , setProduct ]= useState<Products[]>([]);
    useEffect(()=>{
        const fetchProducts = async () => {
             try{
                const response  = await axios.get('http://localhost:8000/api/showTour');
                setProduct(response.data);
                
             }catch(error){
                console.log(error);
            }
        };

        fetchProducts();

    },[]);

    return (
        <div>
            {Products.map((product:Products)=>(
                <div>
                    <p>Name:{product.name}</p>
                    <p>img:{product.img}</p>
                    <p>location:{product.location}</p>
                    <p>price:{product.price}</p>
                </div>
            ))}

            
        </div>
    )
}
export default ProductTSX;
