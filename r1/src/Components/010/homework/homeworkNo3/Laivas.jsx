function Laivas ({car}){
    return car.type === 'car' ? <div style={{color:car.color}}>{car.id} {car.name} {car.type}</div> : null
}
export default Laivas;