function Namas ({seaPlaner}) {
    return seaPlaner.type === 'man' ? <div> {seaPlaner.id} <span style={{color:seaPlaner.color}}>{seaPlaner.name}</span> {seaPlaner.type}</div> : null;
}
export default Namas;