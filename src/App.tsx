
import React, { useState } from 'react';
import logo from './logo.svg';
import './App.css';
import {Products}  from './components /product';
import ProductTSX from './components /product';
import Header from './Components/header';





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
          <div>
              {
                    <Header 
                    home="..."
                    contact="..."
                    about="..."
                    news="..."
                    login="..."
                    register="..."
                    logo="..."
                    cart="..."
                  />
              }
          </div>
          <ProductTSX  products = {products}/>
    </div>
    
  );
}

export default App;

