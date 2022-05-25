import { useState } from 'react';
import './App.css';

function App() {
    const [number, setNumber] = useState(0);

    function plus1 () {
        setNumber(number => number += 1);
    }

    function minus3() {
        setNumber(number => number -= 3);
    }
  return (
    <div className="App">
      <header className="App-header">
        <span>{number}</span>
        <button onClick={plus1}>+</button>
        <button onClick={minus3}>-</button>
      </header>
    </div>
  );
}

export default App;