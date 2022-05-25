function Bala ({arrayBala}){
    let animals = ``;
for (let i = 0; i < arrayBala.length; i++){
    animals += `${arrayBala[i].id}) ${arrayBala[i].type} ${arrayBala[i].name} ${arrayBala[i].color}`;
}

return (<div>{animals}</div>);

} 
export default Bala;