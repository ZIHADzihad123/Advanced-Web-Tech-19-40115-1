import axios from "axios";
import React, { useEffect } from "react";
import { useState } from "react";
import { Table, Button } from "react-bootstrap";
import Header from "./Header";
import Footer from "./footer";
import { Link } from "react-router-dom";

const Productcrud = () => {
  const [user, getuser] = useState([]);

  useEffect(function () {
    axios.get("http://localhost:8000/api/product").then(
      function (rsp) {
        //console.log(rsp)
        getuser(rsp.data);
      },
      function (err) {}
    );
  }, []);

  return (
    <body className="">
      <Header />
      <br />
      <Link to="/add">
        <Button variant="primary">Add Product</Button>
          </Link>

          <br />
          <br />
      <section class="col-lg-10 offset-lg-1 ">
        <Table striped bordered hover size="lg">
          <thead>
            <tr className=" table-danger">
              <th>Id</th>

              <th>Name</th>

              <th>Price</th>

              <th>Image</th>

              <th>Action</th>
            </tr>
          </thead>
          <tbody className="table-primary">
            {user.map((dc) => (
              <tr>
                <td>{dc.id}</td>
                <td>{dc.name}</td>
                <td>{dc.price}</td>
                <td>{dc.image}</td>

                <td>
                  <button type="button" class="btn btn-primary btn-sm m-1">
                    Edit
                  </button>

                  <button type="button" class="btn btn-danger btn-sm">
                    Delete
                  </button>
                </td>
              </tr>
            ))}
          </tbody>
        </Table>
        <Link to="/admin">
          <Button variant="primary">Go back</Button>
        </Link>
          </section>
          <br />
          <br />
          <br />
          <Footer />

    </body>
  );
};

export default Productcrud;
