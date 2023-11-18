import React from "react";


type Main ={
        title : string 
        content : string;
        img: string;
}

const Main:React.FC  =() => {
       const data:Main = {
                title:'hello',
                content:'hello ',
                img: '',

       };
       return (
                <div>
                        <p>{data.title}</p>
                        <p>{data.content}</p>
                        <p>{data.img}</p>
                </div>
       );
};
export default Main;