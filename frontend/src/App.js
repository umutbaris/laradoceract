import React from 'react';

import './App.css';
import 'antd/dist/antd.css';

import { Layout } from 'antd';
import Login from './views/login/Login/Login';

function App() {
  return (
    <div className="App">
      <Layout>
        <Login />
      </Layout>
    </div>
  );
}

export default App;
