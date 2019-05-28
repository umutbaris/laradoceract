import React from 'react';
import {
  Button, Input, Row, Col, Card, Icon, Form,
} from 'antd';
import logo from '../../../assets/img/sony-logo.png';

const Login = (props) => {
  const { Password } = Input;
  return (
    <div style={{ marginTop: '200px' }}>
      <Row>
        <Col span={6} offset={9}>
          <Card>
            <img src={logo} height="24" alt="Sony" style={{ margin: '10px 0'}}/>
            <p style={{ fontStyle: 'italic' }}>sonymobile.com</p>
            <Form>
              <Form.Item>
                <Input name="username" prefix={<Icon type="user" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="Username" />
              </Form.Item>
              <Form.Item>
                <Password name="password" prefix={<Icon type="lock" style={{ color: 'rgba(0,0,0,.25)' }} />} placeholder="Password" />
              </Form.Item>
              <Form.Item>
                <Button type="primary" htmlType="submit">
                  Log In <Icon type="login" />
                </Button>
              </Form.Item>
            </Form>
          </Card>
        </Col>
      </Row>
    </div>
  );
};

export default Login;
