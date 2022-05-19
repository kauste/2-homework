
import './App.css';
import Hello from './Components/009/Hello';
import HodyHo from './Components/009/HodyHo';
import NonsenceText2 from './Components/009/NonsenceText2';
import NonsenceText3 from './Components/009/NonsenceText3';
import ZandB from './Components/009/ZandB';
import Zuiki from './Components/009/Zuiki';
import NonsenceText from './Components/009/NonsenceText';
import Button from './Components/009/Button';
import MrGreen from './Components/009/MrGreen';
import { useState } from 'react';

function App() {
  const [mrGreen, setMrGreen] = useState('green');
  const clickButton = () => ( setMrGreen(s => s ==='pink' ? 'green' : 'pink'));
  const [red, setRed] = useState(false);
  const clickRed = () => ( setRed(r => !r));
  const[minus, setMinus] = useState(false);
  const minusBut = () => (setMinus(min => !min));
  return (
    <div className="App">
      <header className="App-header">
        <Hello spalva ="red"></Hello>
        <HodyHo></HodyHo>
        <Hello spalva="blue" size={50}></Hello>
        <Hello skaicius={4}></Hello>
        <Zuiki></Zuiki>
        <NonsenceText someText="Kaip tavo dienele?"></NonsenceText>
        <ZandB></ZandB>
        <NonsenceText2  someText2="Life is life" someText2b="nanananana"></NonsenceText2>
        <NonsenceText3 someText3="Not sure" someText3b="so damn not sure" color3="skyblue"></NonsenceText3>
        <h1>Uplifting <span style={{color:mrGreen, backgroundColor:red ? 'red' : null}} clickButton={clickButton}> 1 {minus ? 'minus': null}</span></h1>
        <Button minusBut= {minusBut} clickRed={clickRed} clickButton={clickButton}></Button>
        <MrGreen mrGreen={mrGreen}></MrGreen>
      </header>
    </div>
  );
}

export default App;
