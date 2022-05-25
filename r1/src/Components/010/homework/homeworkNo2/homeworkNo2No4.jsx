
import './App.css';


function App() {
    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
      
  return (
    <div className="App">
      <header className="App-header">
            <div>
                {
                    dogs.filter((c) => (c[0]) !== c[0].toUpperCase()).map((filteredDogs, i) => (
                        <div key ={i}>{filteredDogs}</div>
                        
                    ))
                }
            </div>
      </header>
    </div>
  );
}

export default App;