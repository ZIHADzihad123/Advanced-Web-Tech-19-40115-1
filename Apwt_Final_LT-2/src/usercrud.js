import axios from "axios";
import React, { useEffect } from "react";
import { useState } from "react";
import { Table,Button } from "react-bootstrap";
import Header from "./Header";
import Footer from "./footer";
import { Link } from "react-router-dom";

const Usercrud = () => {
    const [user, getuser] = useState([]);
    
  const [data, setData] = useState([]);

    useEffect( () => {
      
  },[])

  useEffect(function () {
    axios.get("http://localhost:8000/api/user").then(
      function (rsp) {
        //console.log(rsp)
        getuser(rsp.data);
      },
      function (err) {}
    );
  }, []);

    async function deleteoperation(id) {
    
        let result = await fetch("http://localhost:8000/api/delete/" + id, {
          method:'DELETE'
            
        });
        result = await result.json();
        console.warn(result)
        getdata()
    }
    
   async function getdata() {
        let result = await fetch("http://localhost:8000/api/product");
        result = await result.json();
        setData(result)
    }
    
    
    
    
    return (
      <body className="">
        <Header />
        <br />
            <section class="col-lg-10 offset-lg-1 ">
                <h2>Users</h2>
          <Table striped bordered hover size="lg">
            <thead>
              <tr className=" table-danger">
                <th>Id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Usertype</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody className="table-primary">
              {user.map((dc) => (
                <tr>
                  <td>{dc.id}</td>
                  <td>{dc.firstname}</td>
                  <td>{dc.lastname}</td>
                  <td>{dc.email}</td>
                  <td>{dc.password}</td>
                  <td>{dc.phone}</td>
                  <td>{dc.usertype}</td>
                  <td>{dc.address}</td>

                  <td>
                    <button type="button" class="btn btn-primary btn-sm m-1">
                      Edit
                    </button>

                          <button onClick={() => { deleteoperation(dc.id) }} type="button" class="btn btn-danger btn-sm">
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

export default Usercrud;
