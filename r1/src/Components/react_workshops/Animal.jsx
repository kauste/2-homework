import randColor from "../functions/randColor";

function Animal ({Animal}){
    return (
        <figure className="workshopFig">
            <img className="workshopPic" src={Animal.img} alt={Animal.animal + '-animal'}></img>
            <figcaption style={{background:randColor()}}> {Animal.animal} </figcaption>
        </figure>
    )
}
export default Animal;