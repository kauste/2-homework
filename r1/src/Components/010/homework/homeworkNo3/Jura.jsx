import Laivas from "./Laivas";
import Sala from "./Sala";
import Valtis from "./Valtis";

function Jura ({seaPlaners}){
    return(
        <>
        {
            seaPlaners.map((c, i) => <Valtis key={i} man={c}></Valtis>)
        }
        {
            seaPlaners.map((c, i) => <Laivas key={i} car={c}></Laivas>)
        }
        {
            seaPlaners.map((c, i) => <Sala key={i} animal={c}></Sala>)
        }
        {
            seaPlaners.map((c, i) => c.type === 'fish' ? <div key={i} style={{color:seaPlaners.color}}>{c.id} {c.name} {c.type}</div> : null)
        }
        </>
    )

}

export default Jura;