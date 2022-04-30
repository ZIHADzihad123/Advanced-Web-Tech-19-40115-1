import axios from "axios";
import React, { useState } from "react";
import swal from "sweetalert";
import Footer from "./footer";
import "./EditProfile.css";

const Useredit = ({ editprofile }) => {
  const { id, name, email, username } = editprofile;
  const [updateprofile, setUpdateprofile] = useState({
    name: name,
    email: email,
    errors: [],
  });
  const handleOnChange = (e) => {
    const feild = e.target.name;
    const value = e.target.value;
    const newdata = { ...updateprofile };
    newdata[feild] = value;
    setUpdateprofile(newdata);
  };
  const handleaddservice = (e) => {
    const data = {
      ...updateprofile,
      id,
    };

    axios
      .post(`http://localhost:8000/api/PatientEditMyProfile`, data)
      .then((res) => {
        if (res.data.validation_errors) {
          setUpdateprofile({
            ...updateprofile,
            errors: res.data.validation_errors,
          });
          swal("Warning", "No Change Your Profile", "error");
        } else {
          swal("Success", res.data.success, "success");
        }
      });

    e.preventDefault();
  };

  return (
    <div>
      <div
        class="modal fade"
        id="exampleModalToggle"
        aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel"
        tabindex="-1"
      >
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalToggleLabel">
                Update Profile
              </h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form onSubmit={handleaddservice}>
                <div className="mb-3">
                  <label
                    htmlFor="exampleInputPassword1"
                    className="form-label "
                  >
                    Name
                  </label>
                  <input
                    type="text"
                    name="username"
                    className="form-control edit-inp"
                    value={username}
                  />
                </div>
                <div className="mb-3">
                  <label
                    htmlFor="exampleInputPassword1"
                    className="form-label "
                  >
                    Name
                  </label>
                  <input
                    type="text"
                    name="name"
                    className="form-control edit-inp"
                    defaultValue={name}
                    onFocus={handleOnChange}
                  />
                </div>

                <div className="mb-3">
                  <label
                    htmlFor="exampleInputPassword1"
                    className="form-label "
                  >
                    Email
                  </label>
                  <input
                    type="email"
                    name="email"
                    className="form-control edit-inp"
                    onFocus={handleOnChange}
                    defaultValue={email}
                  />
                </div>

                <button type="submit" className="btn btn-primary">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Useredit;
