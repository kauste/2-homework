import { useState } from 'react';
import './App.css';

function App() {
  const[SqRadius, setSqRadius] = useState(0);

  const changeRadius = () => { 
    setSqRadius((oldRadius) => oldRadius === 0 ? 50 : 0) 
  }
  return (
    <div className="App">
      <header className="App-header">
        <span className="squere" style={{borderRadius:SqRadius + '%'}}></span>
        <button onClick={changeRadius}>Click</button>
      </header>
    </div>
  );
}

export default App;