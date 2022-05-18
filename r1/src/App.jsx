
import './App.css';
import Hello from './Components/009/Hello';
import HodyHo from './Components/009/HodyHo';
import NonsenceText2 from './Components/009/NonsenceText2';
import NonsenceText3 from './Components/009/NonsenceText3';
import ZandB from './Components/009/ZandB';
import Zuiki from './Components/009/Zuiki';
import NonsenceText from './Components/NonsenceText';

function App() {
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
      </header>
    </div>
  );
}

export default App;
