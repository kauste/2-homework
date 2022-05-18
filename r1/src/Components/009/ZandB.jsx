function ZandB (){
    const randNum = Math.floor(Math.random() * 2) + 1;
    return <h1 style= {
            {
                color :randNum === 1 ? 'blue' : 'red',
            }
        }>Zebrai ir bebrai</h1>
}
export default ZandB;