import Layout from './layout/Layout';
// import NavBar from './components/NavBar';
// import Footer from './components/Footer';
import {
  BrowserRouter,
  Routes,
  Route,
} from "react-router-dom";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/v1/'  />
      </Routes>
      <Layout>
          <div>
          </div>
      </Layout>
    </BrowserRouter>
  );
}

export default App;
