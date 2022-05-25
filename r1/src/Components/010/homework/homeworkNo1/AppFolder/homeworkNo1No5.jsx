import { useState } from 'react';
import './App.css';

function App() {
    const [Sq, setSq] = useState([]);
 
    function addSqRed (){
        setSq(sqA => [...sqA, 'red'])
    }

    
    function addSqBlue (){
        setSq(sqA => [...sqA, 'blue'])
    }

    function reset () {
        setSq(sqA => [])
    }
  return (
    <div className="App">
      <header className="App-header">
            <div>
                {
                    Sq.map((c, i) => <div className="squere2" style={{display:'inline-block', backgroundColor:c}}>{c}</div>)
                }
                
            </div>
        	<button onClick={addSqRed}>ADD RED</button>
            <button onClick={addSqBlue}>ADD BLUE</button>
            <button onClick={reset}>RESET</button>
      </header>
    </div>
  );
}

export default App;