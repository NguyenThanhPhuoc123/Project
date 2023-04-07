import {BrowserRouter, Routes, Route} from "react-router-dom";
// import carousel from "./components/carousel.js";
import AddUser from "./components/AddUser";
import EditUser from "./components/EditUser";
import UserList from "./components/UserList";
import Menu from './components/menu.js';
import Login from './components/login.js';
import Home from './components/Home.js';
import Register from './components/register.js';

function App() {
  return (
    <div className="row d-flex justify-content-evenly">
      <BrowserRouter>
      <Routes>
        <Route path="/" element={<Menu/>}>
          <Route index element={UserList()}/>
          <Route path="xemthem" element={<Home/>}/>
          <Route path="cards" element={<UserList/>}/>
          <Route path="login" element={<Login/>}/>
          <Route path="register" element={<Register/>}/>
          <Route path="cards/add" element={<AddUser/>}/>
          <Route path="cards/edit/:id" element={<EditUser/>}/>
        </Route>
      </Routes>
    </BrowserRouter>
    </div>
    
  );
}

export default App;
