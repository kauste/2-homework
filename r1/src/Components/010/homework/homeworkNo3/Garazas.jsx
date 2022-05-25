function Garazas ({seaPlaner}) {
    return seaPlaner.type === 'car' ? <div> {seaPlaner.id} <span style={{color:seaPlaner.color}}>{seaPlaner.name}</span>{seaPlaner.type}</div> : null;
}
export default Garazas;