function ToggleList(id, element){
    var list = document.getElementById(id)
    var img = element.querySelector('img')
    if (list.style.display != 'none'){
        list.style.display = "none"
        img.src = 'images/plus-button.jpg'
        return false;
    }else {
        list.style.display = "block"
        img.src = 'images/minus-green-button.jpg'
        return true
    }
    
}