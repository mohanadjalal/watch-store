
const toggle = document.getElementById("link"); 
const dropdown = document.getElementById("dropdown"); 
let showDropdown  = false; 


function toggleDropdown() { 
    if(showDropdown) { 
    dropdown.style.visibility="visible";

    }else  { 
    dropdown.style.visibility="hidden";

    }

    showDropdown = !showDropdown
}

toggle.addEventListener('click' , toggleDropdown)