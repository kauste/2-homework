function HodyHo(){
    const times = Math.random(9, 50);
    return (
        <>
        <h2 style={
            {
                color: 'pink',
                backgroundColor: 'blue',
                padding: times +'px'
            }
        }>Hody-ho</h2>
        <p>Mister Henky says hello to everybody for {times} times</p>
        </>
    )
}

export default HodyHo;