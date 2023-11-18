import React from 'react';
import logo from './logo.svg';
import './App.css';
import Header from './Components/header';

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
       </div>
  );
}

export default App;
