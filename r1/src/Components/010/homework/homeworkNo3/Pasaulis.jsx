import Akvariumas from "./Akvariumas";
import Garazas from "./Garazas";
import Namas from "./Namas";
import Narvas from "./Narvas";

function Pasaulis ({seaPlaners}) {
    return (
        <>
        {
            seaPlaners.map((c, i) => c.id % 2 ? null : <Namas key={i} seaPlaner={c}></Namas>)
        }
        {
            seaPlaners.map((c, i) => c.id % 2 ? null :<Narvas key={i} seaPlaner={c}></Narvas>)
        }
        {
            seaPlaners.map((c, i) => c.id % 2 ? null : <Garazas key={i} seaPlaner={c}></Garazas>)
        }
         {
            seaPlaners.map((c, i) => c.id % 2 ? null : <Akvariumas key={i} seaPlaner={c}></Akvariumas>)
        }
        <br/>
        {
            seaPlaners.map((c, i) => c.id % 2 ? <Namas key={i} seaPlaner={c}></Namas> : null)
        }
        {
            seaPlaners.map((c, i) => c.id % 2 ? <Narvas key={i} seaPlaner={c}></Narvas> : null)
        }
        {
            seaPlaners.map((c, i) => c.id % 2 ? <Garazas key={i} seaPlaner={c}></Garazas> : null )
        }
        {
            seaPlaners.map((c, i) => c.id % 2 ? <Akvariumas key={i} seaPlaner={c}></Akvariumas> : null)
        }
        </>
    )
}
export default Pasaulis;