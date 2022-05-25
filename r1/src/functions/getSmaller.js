function getSmaller (s){
    if(s > 80){
        return  s / 5;
    } else if (s < 80 && s > 8){
       return s - 1;
    }
    return s;
}

export default getSmaller;