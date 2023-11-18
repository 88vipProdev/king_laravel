import react from 'react';


type header ={
        home:any ;
        contact:any ;
        about:any ;
        news :any ;
        login:any ;
        register:any ;
        logo :string ;
        cart:any ;
        
};

const Header:React.FC<header>  =(value) => {
        return (
                <header>
                
                <div className='bg-red-400 h-28'> 
                <nav className='justify-between flex  flex-grow items-center'>
                        <div className='basic-2/6  font-semibold justify-between ,text-xl flex flex-grow' >
                                <a href={value.logo}>travelagency</a>
                        </div>

                        <ul className='basic-3/6  flex items-center justify-end gap-8 text-sm text-blue-800 font-medium' >
                                <li className='cursor-pointer py-2 hover:text-gray-950 relative after:absolute after:bottom-0 after:left-0 after:bg-slate-950 after:h-0.5 after:w-0 hover:after:w-full after:transition-all after:ease-in-out after:duration-500  flex-1 w-36 justify-between'>
                                        <a href={value.home}>Home</a>
                                        
                                </li>
                                <li className='top-menu-item'>
                                        <a href={value.contact}>Contact</a>
                                        
                                </li>
                                <li className='top-menu-item'>
                                        <a href={value.about}>About</a>
                                
                                </li>
                                <li className='top-menu-item'>
                                        <a href={value.news}>News</a>
                                
                                </li>
                                <li className='top-menu-item'>
                                        <a href={value.login}>Login</a>
                                
                                </li>
                                <li className='top-menu-item'>
                                        <a href={value.register}>Register</a>
                                
                                </li>
                
                        </ul>
                        <ul className='basic-1/6 ml-16 flex uppercase text-sm text-rose-600'>
                                <li className='top-menu-item'>
                                        <a href={value.cart}>cart</a>
                                </li> 
                        </ul>
                </nav>     
                </div>
                
                
        </header>
        
        );

};
export default Header;