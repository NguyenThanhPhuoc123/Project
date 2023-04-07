import React, { useState, useEffect } from "react";
import axios from "axios";
import { useNavigate, useParams } from "react-router-dom";

const EditUser = () => {
  const [name, setName] = useState("");
  const [img, setImg] = useState("");
  const [price, setPrice] = useState("");
  const [description, setDescription] = useState("");
  const navigate = useNavigate();
  const { id } = useParams();

  useEffect(() => {
    getUserById();
  },[]);

  const updateUser = async (e) => {
    e.preventDefault();
    try {
      await axios.patch(`http://localhost:5000/sanpham/${id}`, {
        name,
        img,
        price,
        description,
      });
      navigate("/Cards");
    } catch (error) {
      console.log(error);
    }
  };

  const getUserById = async () => {
    const response = await axios.get(`http://localhost:5000/sanpham/${id}`);
    setName(response.data.name);
    setImg(response.data.img);
    setPrice(response.data.price);
    setDescription(response.data.description);
  };

  return (
    <div className="row mt-5 ">
      <div className="col-4 offset-4">
        <form onSubmit={updateUser}>
          <div className="field">
            <label className="label">Name</label>
            <div className="form-group">
              <input
                type="text"
                className="form-control"
                value={name}
                onChange={(e) => setName(e.target.value)}
                placeholder=""
              />
            </div>
          </div>
          <div className="field">
            <label className="label">Image</label>
            <div className="form-group">
              <input
                type="text"
                className="form-control"
                value={img}
                onChange={(e) => setImg(e.target.value)}
                placeholder=""
              />
            </div>
          </div>
          <div className="field">
            <label className="label">Price</label>
            <div className="form-group">
            <input
                type="text"
                className="form-control"
                value={price}
                onChange={(e) => setPrice(e.target.value)}
                placeholder=""
              />
            </div>
          </div>
          <div className="field">
            <label className="label">Description</label>
            <div className="form-group">
              <input
                type="text"
                className="form-control"
                value={description}
                onChange={(e) => setDescription(e.target.value)}
                placeholder=""
              />
            </div>
          </div>
          <div className="field">
            <button type="submit" className="btn btn-success mt-3">
              Update
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default EditUser;
