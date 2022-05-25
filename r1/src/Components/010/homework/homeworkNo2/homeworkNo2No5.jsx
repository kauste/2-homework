import './App.css';


function App() {
    const dogs = ['šuo', 'šunius', 'Bobikas', 'kudlius', 'Šarikas', 'avigalvis'];
      
  return (
    <div className="App">
      <header className="App-header">
            <div>
                {
                    dogs.map((c, i) => <div key={i} style={{color: c.length > 6 ? 'green' : 'red'}}>{c.length}</div>)
                }
            </div>
      </header>
    </div>
  );
}

export default App;