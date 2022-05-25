function Sala ({animal}) {
    return animal.type === 'animal' ? <div style={{color:animal.color}}>{animal.id} {animal.name} {animal.type}</div> : null
}
export default Sala;