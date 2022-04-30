import logo from './logo.svg';
import './App.css';
import Header from './Header'

import { BrowserRouter as Router, Routes, Route, Link, BrowserRouter } from "react-router-dom";
import Login from './Login'
import Register from './Register';
import AddProduct from './AddProduct';
import UpdateProduct from './UpdateProduct';
import Admin from './Admin';
import Usercrud from './usercrud';
import Productcrud from './Productcrud';
import Footer from './footer';


function App() {
  return (
    <div className="App">
      <div className="">
        <BrowserRouter>
          {/* <Header /> */}
          <Routes>
            <Route path="/" element={<Login />}>

            </Route>
            <Route path="/add" element={<AddProduct />}>

            </Route>
            <Route path="/update" element={<UpdateProduct />}>

            </Route>
            <Route path="/login" element={<Login />}>

            </Route>
            <Route path="/register" element={<Register />}>
              
            </Route>

            <Route path="/admin" element={<Admin />}>
              
            </Route>

            <Route path="/usercrud" element={<Usercrud />}>
              
            </Route>

            <Route path="/Productcrud" element={<Productcrud />}>
              
            </Route>


          </Routes>
        </BrowserRouter>
      </div>
    </div>
  );
}

export default App;
