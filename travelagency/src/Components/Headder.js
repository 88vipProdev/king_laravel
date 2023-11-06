function Headder()
{
    return (

        <header className="m-0 p-0 box-border font-poppins bg-green-400 mt-0" style={{ height: "100px", position: "fixed", top: 0, left: 0, right: 0 }}>
        <div className="header-container ml-20 ">
            <nav className="mt-5 flex flex-row justify-between items-center">
                <div className="logo basic-2/6 text-center text-xl font-semibold corsor-pointer ">
                    Travelagency
                </div>  
                <ul className="basic-3/6 flex items-center justify-end gap-8 uppercase text-sm mr-10 mt-5 ">
                    <li className ="trvelagency-menu-item">
                        <a href= "">News</a>
                    </li>
                    <li className = "trvelagency-menu-item">
                        <a href = "">Tour</a>
                    </li>
                    <li className="trvelagency-menu-item">
                        <a href = "">event</a>
                    </li>
                    <li className= "trvelagency-menu-item">
                        <a href = "">contact</a>
                    </li>
                    <li className="trvelagency-menu-item">
                        <a href="">trend tour</a>
                    </li>
                    <li className="trvelagency-menu-item">
                        <a href="">about</a>
                    </li>
                   
                  
                </ul>
                <ul className="basic-1/6 flex items-center justify-end gap-8 mr-10 uppercase text-sm">
                <li className="trvelagency-menu-item">
                        <a href="">register</a>
                    </li>
                    <li className="trvelagency-menu-item">
                        <a href="">login</a>
                    </li>
                </ul>
            </nav>
        
        </div>
    </header>
    )
   
};
export default Headder;