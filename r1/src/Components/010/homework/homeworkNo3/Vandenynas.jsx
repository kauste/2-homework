import Spalva from "./Spalva";
import Tipas from "./Tipas";
import Vardas from "./Vardas";

function Vandenynas ({seaPlaners}){
    return (
        <>  
            {
                [...seaPlaners].sort((a, b) => (a.type > b.type ? 1 : -1)).map((c, i) => <Tipas key={i} seaPlaner={c}></Tipas>)
            }
            <br/>
            {
                [...seaPlaners].sort((a, b) => (a.name > b.name ? 1 : -1)).map((c, i) => <Vardas key={i} seaPlaner={c}></Vardas>)
            }
            <br/>
            {
                [...seaPlaners].sort((a, b) => (a.color > b.color ? 1 : -1)).map((c, i) => <Spalva key={i} seaPlaner={c}></Spalva>)
            }
        </>
    )
}

export default Vandenynas;