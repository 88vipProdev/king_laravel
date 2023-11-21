
import React, { useState } from 'react';
import logo from './logo.svg';
import './App.css';
import {Products}  from './components /product';
import ProductTSX from './components /product';




function App() {
  type Product = {
    name: string;
    img: string;
    location: string; 
    price: number;
  }

      const [products , setProduct] = useState<Product[]>([]);
  return (
    <div className="App">
          <ProductTSX  products = {products}/>
    </div>
    
  );
}

export default App;

