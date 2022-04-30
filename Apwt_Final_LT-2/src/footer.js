import React from "react";
import { render } from "react-dom";
import "./footer.css";

const Footer = () => (
  <footer className="footer" style={{ padding: "39px" }}>
    <h5>Copyright! 2022</h5>
  </footer>
);

const App = () => (
  <div className="content">
    <h1>Hi guys!</h1>
  </div>
);

render([<App key="1" />, <Footer key="2" />], document.getElementById("root"));

export default Footer;

