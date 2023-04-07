import slide_1 from '../img/slide_1.png';
import slide_2 from '../img/slide_2.png';
import slide_3 from '../img/slide_3.png';
import slide_4 from '../img/slide_4.png';
import Carousel from 'react-bootstrap/Carousel';
// import 'bootstrap/dist/css/bootstrap.min.css';
function carousel(){
    return (
      <Carousel variant="dark">
      <Carousel.Item>
        <img
          className="w-100"
          src={slide_1}
          alt="First slide"
        />
        
      </Carousel.Item>
      <Carousel.Item>
        <img
          className=" w-100"
          src={slide_2}
          alt="Second slide"
        />
        
      </Carousel.Item>
      <Carousel.Item>
        <img
          className=" w-100"
          src={slide_3}
          alt="Third slide"
        />
        
      </Carousel.Item>
      <Carousel.Item>
        <img
          className=" w-100"
          src={slide_4}
          alt="Four slide"
        />
        
      </Carousel.Item>
    </Carousel>
    )
}
export default carousel;