import Daiktas from "./Daiktas";


function Tvenkinys({seaPlaners}){
    return(
        <>
            {
                seaPlaners.map((s, i) => s.id % 2 ? <Daiktas key={i} seaPlaner={s}></Daiktas> : null)
            }
             {
                seaPlaners.map((s, i) => s.id % 2 ? null : <Daiktas key={i} seaPlaner={s}></Daiktas>)
            }
        </>
    )
}
export default Tvenkinys;