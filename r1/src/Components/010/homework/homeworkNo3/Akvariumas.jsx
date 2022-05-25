function Akvariumas ({seaPlaner}) {
    return seaPlaner.type === 'fish' ? <div> {seaPlaner.id} <span style={{color:seaPlaner.color}}>{seaPlaner.name}</span>{seaPlaner.type}</div> : null;

}
export default Akvariumas;