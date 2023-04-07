import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
// import 'bootstrap/dist/css/bootstrap.min.css';
import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import { Outlet, Link } from "react-router-dom";
import '../App.css';
const menu=() => {
    return(
      <>
        <Navbar bg="light" expand="lg">
            <Container>
              <Navbar.Brand href="#home"><Link to="/" className=""><img
            /></Link></Navbar.Brand>
              <Navbar.Toggle aria-controls="basic-navbar-nav" />
              <Navbar.Collapse id="bg-link">
                <Nav className="me-auto  ">
                  <Nav.Link href=""  ><Link to="/" className="example">Home</Link></Nav.Link>
                  <Nav.Link href=""  ><Link to="/Cards" className="example"> Giỏ Trái Cây</Link></Nav.Link>
                  <Nav.Link href=""  ><Link to="/xemthem" className="example">Xem thêm </Link></Nav.Link> 
                  <Nav.Link href=""  ><Link to="" className="example">About </Link></Nav.Link>
                  <Nav.Link href=""  ><Link to="" className="example">Contact</Link></Nav.Link>
                </Nav>
                 <Button className='bg'><Link  to="/login">Đăng Nhập</Link></Button>
                <Button className="bg"><Link  to="/register"  >Đăng Ký</Link></Button>
              </Navbar.Collapse>
            </Container>
        </Navbar>
        <Outlet />
        </>
    )
};

export default menu;
