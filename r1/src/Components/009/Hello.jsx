function Hello ({spalva, size, skaicius}) {
    return <h1 style={
        {
            color:spalva,
            fontSize: (size * 2) + 'px'
        }
    }>Hello {skaicius + 4}</h1> // jei noreciau.. lad return paimtu viska, po return reikia skliausteliu
}

export default Hello;