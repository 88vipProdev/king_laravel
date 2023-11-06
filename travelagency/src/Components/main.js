import React from 'react';
import maldivesImage from '../assets/image/maldives.jpg';
import travel2 from '../assets/image/travel2.avif';
import travel3 from '../assets/image/travel3.avif';

function Main() {
  return (

    <main>
            <div className="grid grid-cols-3 gap-4 h-full">
                  <div className='p-4 flex flex-col justify-center bg-purple-300'>
                        <img src = {maldivesImage} alt="aldives.jpg" className=' w-96 h-48  object-contain'  />
                  </div>
                  <div className='p-4 flex flex-col justify-center'>
                    <img src = {travel2} alt="travel2.avif" className="h-100% w-100% object-cover"/>
                  </div>
                  <div className='p-4 flex flex-col justify-center'>
                      <img src= {travel3} alt = "travel3.avif" className="h-100% w-100% object-cover" />
                  </div>
            </div>
     </main>
    
  )
};

export default Main;