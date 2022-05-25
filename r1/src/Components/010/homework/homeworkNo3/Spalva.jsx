function Spalva ({seaPlaner}){
    return <div >{seaPlaner.id} <span style={{color:seaPlaner.color}}>{seaPlaner.name}</span> {seaPlaner.type}</div>
}
export default Spalva;