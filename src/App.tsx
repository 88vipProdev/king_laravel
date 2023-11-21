<<<<<<< HEAD
import React from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './Components/header';
import Main from './Components/main';

function App() {
  return (
       <div>
          
        <Header
        home="/home"
        contact="/contact"
        about="/about"
        news="/news"
        login="/login"
        register="/register"
        logo="/logo.png"
        cart = "/cart"
      /> 
        <div>
            <main/>
        </div>
       </div>
      
      
  );
}

export default App;
=======
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
>>>>>>> 6ac1ecf (call api)
