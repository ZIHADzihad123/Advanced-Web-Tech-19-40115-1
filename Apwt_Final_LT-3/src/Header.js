import { Navbar, Nav, NavDropdown } from "react-bootstrap";
import { Link } from "react-router-dom";
import React, { useEffect, useState } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import Admin from "./Admin";


function Header() {
 const id = localStorage.getItem("userId");
 console.log(id);
 const [user, setUser] = useState([]);
    const navigate = useNavigate();
    useEffect(() => {
      axios.get(`http://127.0.0.1:8000/api/profile/${id}`).then((res) => {
        setUser(res.data);
      });
    }, []);

  function logout() {
    localStorage.clear();
    navigate("/login");
  }

  return (
    <div>
      <Navbar bg="primary" variant="dark">
        <Navbar.Brand href="#home">
          <h3 style={{ color: "#6c007d" }}>Kader Food Corner(KFC)</h3>
        </Navbar.Brand>
        <Nav className="ms-auto">
          <button className="btn btn-primary">
            <Link to={"/add"} className="nav-link " style={{ color: "black" }}>
              Add product
            </Link>
          </button>
          <button className="btn btn-primary">
            <Link
              to={"/update"}
              className="nav-link "
              style={{ color: "black" }}
            >
              Update product
            </Link>
          </button>

          <button className="btn btn-primary">
            <Link to={"/login"} className="nav-link" style={{ color: "black" }}>
              Login
            </Link>
          </button>
          <button className="btn btn-primary">
            <Link
              to={"/register"}
              className="nav-link"
              style={{ color: "black" }}
            >
              Register
            </Link>
          </button>

          <button className="btn btn-dark" style={{ color: "black" }}>
            <NavDropdown title={user.firstname}>
              <NavDropdown.Item className="ml-1">
                <Link to="/admin">Dashboard</Link>
              </NavDropdown.Item>
              <NavDropdown.Item className="ml-1" onClick={logout}>
                Logout
              </NavDropdown.Item>
            </NavDropdown>
          </button>
        </Nav>

        <nav></nav>
      </Navbar>
    </div>
  );
}

export default Header;
