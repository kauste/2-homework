function Button ({clickButton, clickRed, minusBut}) {
 return (
     <>
        <button onClick={clickButton}>PressMe</button>
        <button onClick={clickRed}>PressMe</button>
        <button onClick={minusBut}>PressMe</button>
     </>
 )
}

export default Button;