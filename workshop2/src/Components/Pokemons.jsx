import { useEffect, useState } from 'react';
import Pokemon from './Pokemon';
function Pokemons(){
const [pokemons, setPokemons] = useState([]);
    useEffect(() => {
        fetch('https://pokeapi.co/api/v2/pokemon')
        .then(res => res.json())
        .then(data => {
        console.log(data.results);
        setPokemons(data.results)
        })
    }, [])
    return (
        <div className="App">
        <header className="App-header">
            {
            pokemons.map((pokemon, index) => <Pokemon key={index} name={pokemon.name} url={pokemon.url}></Pokemon>)
            }
        </header>
        </div>
    );
    }
    export default Pokemons;