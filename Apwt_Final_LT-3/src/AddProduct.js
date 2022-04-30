import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import Header from "./Header";
import Footer from "./footer";


function AddProduct() {
  const [id, setid] = useState("");
  const [name, setname] = useState("");
  const [price, setprice] = useState("");
  const [image, setimage] = useState("");
 
  const navigate = useNavigate();

  async function additem() {
    let item = {
      
      name,
      price,
      image,
    }
     
    console.warn(item);
    let result = await fetch("http://127.0.0.1:8000/api/addproduct", {
      method: "POST",
      body: JSON.stringify(item),
      headers: {
        "Content-Type": "application/json",
        Accept: "application/json",
      },
    });

    navigate("/productcrud");
  }

  return (
    <body>
      <div>
        <Header />
        <h1>Add Product</h1>

        <div className="row">
          <div className="col-sm-6 offset-sm-3">
            <div className="card p-5">
              <input
                type="text"
                onChange={(e) => setname(e.target.value)}
                value={name}
                name="name"
                className="form-control mb-2"
                placeholder="Name"
              />

              <input
                type="text"
                onChange={(e) => setprice(e.target.value)}
                value={price}
                name="price"
                className="form-control mb-2"
                placeholder="Price"
              />
              <input
                type="text"
                onChange={(e) => setimage(e.target.value)}
                value={image}
                name="image"
                className="form-control mb-2"
                placeholder="image"
              />

              <button
                type="button"
                onClick={additem}
                className="btn btn-info mt-2"
              >
                Add
              </button>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <Footer />
    </body>
  );
}

export default AddProduct;
