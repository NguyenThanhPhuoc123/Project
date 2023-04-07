import Form from 'react-bootstrap/Form';
import Button from 'react-bootstrap/Button';

function login() {
  return (
    <div className='row '>
        <Form className='col-6 offset-3'>
        <Form.Group className="mb-3" controlId="formGroupEmail">
          <Form.Label>Email address</Form.Label>
          <Form.Control type="email" placeholder="Enter email" />
        </Form.Group>
        <Form.Group className="mb-3" controlId="formGroupPassword">
          <Form.Label>Password</Form.Label>
          <Form.Control type="password" placeholder="Password" />
        </Form.Group>
        <Button variant="outline-primary">Đăng Nhập</Button>
      </Form>
    </div>
  );
}

export default login;