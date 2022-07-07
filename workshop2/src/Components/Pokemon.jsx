function Pokemon ({name, url}){
    return (
        <div>
            <div>{name}</div>
            <a href={url} alt={name + '-animal'}>{url}</a>
        </div>
    )
}
export default Pokemon;