import { Card, Button } from "react-bootstrap";
import { Link } from "react-router-dom";

import Header from "./Header";
import Footer from "./footer";

function Admin() {
  return (
    <body>
      <div className="">
        <Header />
        <br />
        <h1>Welcome Admin</h1>

        <br />
        <br />
        <br />
        <br />

        <div className="row offset-sm-3">
          <div className="col-lg-4">
            <Card style={{ width: "18rem" }}>
              <Card.Body className="bg-info">
                <h3> Manage users</h3>
                <br />
                <Card.Text>update delete users info</Card.Text>

                <Link to="/usercrud">
                  <Button variant="primary">Click here</Button>
                </Link>
              </Card.Body>
            </Card>
          </div>

          <div className="col-lg-4">
            <Card style={{ width: "18rem" }}>
              <Card.Body className="bg-info">
                <h3> Manage products</h3>
                <br />
                <Card.Text>update delete products info</Card.Text>

                <Link to="/productcrud">
                  <Button variant="primary">Click here</Button>
                </Link>
              </Card.Body>
            </Card>
          </div>
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <br />
        
      </div>
      <Footer />
    </body>
  );
}

export default Admin;
