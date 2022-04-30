import React, { useState,useEffect } from 'react'
import { useNavigate } from "react-router-dom";
import Header from "./Header";
import Footer from "./footer";



function Register() {
    
    
    const [firstname, setfirstname] = useState("")
    const [lastname, setlastname] = useState("")
    const [email, setemail] = useState("")
    const [password, setpassword] = useState("")
    const [phone, setphone] = useState("")
    const [usertype, setusertype] = useState("")
    const [address, setaddress] = useState("")
    const navigate = useNavigate();

    async function signup() {
       let item={firstname,lastname,email,password,phone,usertype,address}
        console.warn(item)
       let result= await fetch("http://127.0.0.1:8000/api/register", {
          method: "POST",
          body: JSON.stringify(item),
          headers: {
            "Content-Type": "application/json",
            Accept: "application/json"
          },
       });
       
     
        navigate("/login")


    }
    


  return (
    <body>
      <div>
        <Header />
        <h1>Register</h1>

        <div className="row">
          <div className="col-sm-6 offset-sm-3">
            <div className="card p-5">
              <input
                type="text"
                onChange={(e) => setfirstname(e.target.value)}
                value={firstname}
                name="firstname"
                className="form-control mb-2"
                placeholder="Firstname"
              />
              <input
                type="text"
                onChange={(e) => setlastname(e.target.value)}
                value={lastname}
                name="lastname"
                className="form-control mb-2"
                placeholder="Lastname"
              />

              <input
                type="text"
                onChange={(e) => setemail(e.target.value)}
                value={email}
                name="email"
                className="form-control mb-2"
                placeholder="Email"
              />
              <input
                type="text"
                onChange={(e) => setpassword(e.target.value)}
                value={password}
                name="password"
                className="form-control mb-2"
                placeholder="Password"
              />
              <input
                type="text"
                onChange={(e) => setphone(e.target.value)}
                value={phone}
                name="phone"
                className="form-control mb-2"
                placeholder="Phone"
              />
              <input
                type="text"
                onChange={(e) => setusertype(e.target.value)}
                value={usertype}
                name="usertype"
                className="form-control mb-2"
                placeholder="Usertype"
              />
              <input
                type="text"
                onChange={(e) => setaddress(e.target.value)}
                value={address}
                name="address"
                className="form-control mb-2"
                placeholder="Address"
              />

              <button
                type="button"
                onClick={signup}
                className="btn btn-info mt-2"
              >
                Register
              </button>
            </div>
          </div>
        </div>
      </div>
      
      
      <br />
      <Footer />
    </body>
  );
}

export default Register;
