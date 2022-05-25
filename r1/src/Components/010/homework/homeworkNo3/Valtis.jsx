function Valtis ({man}) {
    return man.type === 'man'? <div style={{color:man.color}}>{man.id} {man.name} {man.type}</div> : null
}

export default Valtis;