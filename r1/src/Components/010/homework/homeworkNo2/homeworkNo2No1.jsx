
import './App.css';


function App() {
    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
      
  return (
    <div className="App">
      <header className="App-header">
            <div>
                {
                    dogs.map ((c, i) => <div key={i} className="squere2" style={{width:'100px', height: '100px'}}>{c}</div>)
                }
            </div>
      </header>
    </div>
  );
}

export default App;