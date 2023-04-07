import React, { useState, useEffect } from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import Card from 'react-bootstrap/Card';
import '../App.css';

const UserList = () => {
  const [users, setUser] = useState([]);

  useEffect(() => {
    getUsers();
  }, []);

  const getUsers = async () => {
    const response = await axios.get("http://localhost:5000/sanpham");
    setUser(response.data);
  };

  const deleteUser = async (id) => {
    try {
      await axios.delete(`http://localhost:5000/sanpham/${id}`);
      getUsers();
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <>
    <div className="row mt-5 text-center">
      <div className="col-12 text-end pe-5">
        <Link to={`add`} className="btn btn-success">
          Thêm sản phẩm mới
        </Link>
      </div>
    </div>
    <div className="row mt-5 text-center">
    
      <div className="col-12">
        {users.map((user, index)=>(
          <>
          <Card style={{ width: '23%' }} className="nonedec">
          <img
              alt=""
              src={require('../img/'+user.img)}
              className="d-flex align-item-top img-card"
            />
            <Card.Body>
                <Card.Title>{user.name}</Card.Title>
                <Card.Text className="tx">
                    {user.price}
                </Card.Text>
                <Card.Text className="">
                    {user.description}
                </Card.Text>
                <button
              onClick={() => deleteUser(user.id)}
              className="btn btn-sm btn btn-danger me-3"
            >
              Delete
            </button>  
            <Link
              to={`edit/${user.id}`}
              className="btn btn-sm btn-info me-2"
            >
              Edit
            </Link>
            </Card.Body>
          </Card>
              
            </>
        ))}
        
      </div>
    </div> 
    </>
  );
};

export default UserList;
