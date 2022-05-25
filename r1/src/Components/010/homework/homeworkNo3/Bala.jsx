function Bala({arrayBala}){
    return (
        <>
        {
            arrayBala.map((animal, i) => <div key={i}>{animal.id + ')' + animal.type + ' ' + animal.name + ' ' + animal.color + ';'}</div>)
        }
        </>
    )
    
}
export default Bala;