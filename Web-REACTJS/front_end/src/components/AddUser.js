import React, { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

function importAdd(item){
  return item.keys().map(item);
}
const images = importAdd(require.context('../img',false, /\.(png|jpe?g|svg)$/));
images.forEach( (item,index) => {
  item = item.substring(item.lastIndexOf('/')+1)
  images[index] = item.replace(/\.[^.]*(\.(png|jpe?g|svg))/g, "$1");
});
const AddUser = () => {
  const [name, setName] = useState("");
  const [img, setImg] = useState("");
  const [price, setPrice] = useState("");
  const [description, setDescription] = useState("");
  const navigate = useNavigate();

  const saveUser = async (e) => {
    e.preventDefault();
    try {
      await axios.post("http://localhost:5000/sanpham", {
        name,
        img,
        price,
        description,
      });
      navigate("/");
    } catch (error) {
      console.log(error);
    }
  };

  return (
    <div className="row mt-5 ">
      <div className="col-4 offset-4">
        <form onSubmit={saveUser}>
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
            <select className="form-select" value={img} onChange={(e)=> setImg(e.target.value)}>
              <option value="">Choose Image</option>
              {images.map(img =>{return (
                <option value={img}>{img}</option>
              )})}
            </select>
            {img!=="" &&<><img className="form-control" src={require("../img/"+img)} style={{"objectFit":"contain","width":"350px","height":"350px"}}></img></>}
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
              Save
            </button>
          </div>
        </form>
      </div>
    </div>
  );
};

export default AddUser;
