import { useState } from "react";
import './App.css';
import getSmaller from './functions/getSmaller';
import randColor from './functions/randColor';

function App() {
    const [dydis, setDydis] = useState(20);
    const [spalva, setSpalva] = useState('black');
    const [textSpalva, setTextSpalva] = useState('black');
    
const padidink = () => {
        setDydis(s => s < 50 ? s * 5 : s + 1);
    }
const sumazink = () => {
        setDydis(
            getSmaller(dydis)
        )
}
const nuspalvink = (a) => {
    setSpalva(s => s = a)
}
const bilekaip = () => {
    setTextSpalva(s => s = randColor())
}
    return (
        <div className="App">
          <header className="App-header">
            <div style={{fontSize:dydis + 'px', color:textSpalva}}>Laba diena</div>
            <span style={{color:spalva}}>{dydis}</span>
            <button onClick={padidink}>+</button>
            <button onClick={sumazink}>-</button>
            <button onClick={() => nuspalvink('red')}>Raudona</button>
            <button onClick={() => nuspalvink('blue')}>Melyna</button>
            <button onClick={() => nuspalvink(randColor())}>Rand</button>
            <button onClick={bilekaip}>Text Spalva</button>
          </header>
        </div>
      );

}

export default App;