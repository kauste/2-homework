function Narvas ({seaPlaner}){
    return seaPlaner.type === 'animal' ? <div> {seaPlaner.id} <span style={{color:seaPlaner.color}}>{seaPlaner.name}</span>{seaPlaner.type}</div> : null;

}
export default Narvas;