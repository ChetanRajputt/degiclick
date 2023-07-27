const navBar = document.getElementById('navBar')
const searchIcon = document.getElementById('searchIcon')
const search_Modal = document.getElementById('search_Modal')
const search_Aero = document.getElementById('search_Aero')

searchIcon.addEventListener('click', () => {
    navBar.style.display = 'none';
    search_Modal.style.display = 'flex';
})

search_Aero.addEventListener('click', () => {
    search_Modal.style.display = 'none';
    navBar.style.display = 'flex';
})

// const searchBar = document.getElementById('searchBar');
const searchingProduct = () => {
    const searchBar = document.getElementById('searchBar').value.toUpperCase();
    const searchitems = document.getElementById('productList');
    const product = document.querySelectorAll(".card");
    const productName = document.getElementsByTagName("h3");

    for (let i = 0; i < productName.length; i++) {
        let match = product[i].getElementsByTagName('h3')[0];

        if (match) {
            let textvalue = match.textContent || match.innerHTML

            if (textvalue.toUpperCase().indexOf(searchBar) > -1) {
                product[i].style.display = "";
            }
            else {
                product[i].style.display = "none";
            }
        }
    }
}






