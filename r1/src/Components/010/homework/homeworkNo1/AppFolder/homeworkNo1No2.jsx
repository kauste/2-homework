import { useState } from 'react';
import './App.css';
import randomNumber from './functions/randNumber';


function App() {


  const [number, setNumber] = useState(randomNumber);
  const [sqRadius, setSqRadius] = useState(0);

  const changeRadius = () => {
    setSqRadius((oldRadius) => oldRadius === 0 ? 50 : 0)
  }
  
  const changeNumber = () => {
    setNumber(number => randomNumber());
  }

  return (
    <div className="App">
      <header className="App-header">
        <div className="squere" style={{borderRadius:sqRadius + '%'}}>
            <span>{number}</span>
        </div>
        <button onClick={changeRadius}>Change</button>
        <button onClick ={changeNumber}>Random</button>
      </header>
    </div>
  );
}

export default App;