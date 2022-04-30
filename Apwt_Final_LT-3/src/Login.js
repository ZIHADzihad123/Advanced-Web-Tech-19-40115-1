import React, { useState, useEffect } from "react";
import { useNavigate } from "react-router-dom";
import axios from "axios";
import { Link } from "react-router-dom";
import Header from "./Header";
import Footer from "./footer";

const Login = () => {
  const [event, setEvent] = useState({
    email: "",
    password: "",
  });
  const [err, setErr] = useState("");
  const handleChange = (e) => {
    const newUser = { ...event };
    newUser[e.target.name] = e.target.value;
    setEvent(newUser);
  };
      const navigate = useNavigate();

  console.log(event);
  const handleSubmit = (e) => {
    axios
      .post("http://127.0.0.1:8000/api/login", event)
      .then((resp) => {
        if (!resp.data) {
          console.log("error");
        } else {
          if (resp.data.message) {
            console.log(resp.data);
            setEvent({
              email: "",
              password: "",
            });
            setErr(resp.data.message);
          } else {
            localStorage.setItem("userId", resp.data.id);
            localStorage.setItem("userData", resp.data);
            navigate("/admin");
          }
        }
      })
      .catch((err) => {
        console.log(err);
      });
      e.preventDefault();
      
      
  };


  return (
    <body>
      <div>
        <Header />

        <div class="page">
          <div class="login_body">
            {err ? <div class="alert alert-info">{err}</div> : ""}
            <h1>Login</h1>
            <div className="col-sm-6 offset-sm-3">
              <div className="card p-5" style={{ marginTop: "70px" }}>
                <form onSubmit={handleSubmit}>
                  <div class="mb-3">
                    <input
                      type="text"
                      name="email"
                      placeholder="Email"
                      class="form-control"
                      id="formGroupExampleInput"
                      onChange={handleChange}
                    />
                  </div>

                  <div class="mb-3" style={{ marginTop: "20px" }}>
                    <input
                      type="password"
                      name="password"
                      placeholder="Password"
                      class="form-control"
                      id="formGroupExampleInput2"
                      onChange={handleChange}
                    />
                  </div>
                  <input
                    type="submit"
                    name="submit"
                    value="Sign in"
                    class="btn btn-primary login_button"
                  />
                  <div class="swap_between_login_register">
                    <p>Don't have any account?</p>
                    <u>
                      <Link to="/register"> Create an account</Link>
                    </u>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     
      <br />
      <br />
      <br />
      <br />
      <br />
      <Footer />
    </body>
  );
};


export default Login;
