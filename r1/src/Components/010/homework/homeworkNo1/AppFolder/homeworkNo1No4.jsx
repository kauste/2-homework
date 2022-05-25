import { useState } from 'react';
import './App.css';

function App() {
const [squere, setSquere] = useState([]);

const addSquere = () => {setSquere(squereM => [...squereM, 2])}
  return (
    <div className="App">
      <header className="App-header">
        <div>
          {
            squere.map((c, i) => <div key={i} className="squere2" style={{display:'inline-block'}}>{i}</div>)
          }
        </div>
        <button onClick={addSquere}>ADD</button>
     
      </header>
    </div>
  );
}

export default App;