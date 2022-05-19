import { useState } from 'react';
import './App.css';
import randColor from './functions/randColor';

const cats = ['Plikis', 'Rainis', 'Murkis'];
function App() {

  const [spalva, setSpalva] = useState('red');
  const [number, setNumber] = useState(1);
  const [kv, setKv] = useState([]);

  const stebuklas = (a) => {
    console.log('Stebuklu Stebuklas ' + a);
  }

  const stebuklas2 = () => {
    console.log('Stebuklu Stebuklas');
                              // setSpalva(spalva === 'red'? 'skyblue' : 'red'); // spalva galima keisti tik per setSpalva, negalime tiesiogiai;
   setSpalva((oldColor) => oldColor === 'red'? 'skyblue' : 'red')
    console.log(spalva);
  }

  const changeNum = () => {
    setNumber((number => number + 1));
  }

  const addKv = () => setKv(kvM => [...kvM, randColor()]);
  return (
    <div className="App">
      <header className="App-header">
       <h1 style={{color:spalva}}>State</h1>
       <div className="kvc">
       {
         kv.map((c, i) => <div key={i} className="kv" style={{background: c}}>{i}</div>)
       }
       </div>
       <span>{number}</span>
       <button onClick={()=> stebuklas('Abra kadabra')}>Press with</button>
       <button onClick={stebuklas2}>Press without</button> 
       <button onClick={changeNum}>changeNum</button>
       <button onClick={addKv}>Add []</button>
      </header>
    </div>
  );
}

export default App;
