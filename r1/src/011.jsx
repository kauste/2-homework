import { useEffect, useState } from 'react';
import './App.css';

function App() {

    const [count, setCount] = useState(1);
    const [cats, setCats] = useState([]);

    useEffect(() => {
        console.log('GO');
    }, []);

    return (
        <div className="App">
          <header className="App-header">
              <h1>{count}</h1>
            <button onClick={() => setCount(c => c + 1)}>+1</button>
            {
                cats.map((c, i) => <div key={i}>{c}</div>)
            }
          </header>
        </div>
      );

}

export default App;