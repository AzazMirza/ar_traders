const searchTemplate = document.querySelector("[search-template]")
const searchCardsContainer = document.querySelector("[search-cards-container]")
const searchInput = document.querySelector("[search-input]")

let results = []

searchInput.addEventListener("input", e => {
    const value = e.target.value.toLowerCase()

    console.log(value)

    results.forEach( result =>{
       const isVisible =
       result.name.toLowerCase().includes(value)   // || for another condition
       result.element.classList.toggle("hide", !isVisible)
  
    })
    
})


.then(res => res.json())
.then(data => {
    // alert('sdf')
    results = data.map(search => { 
    const card = searchTemplate.content.cloneNode(true).children[0]
    const header = card.querySelector("[data-header]")
    header.textContent = search.name
    searchCardsContainer.append(card)
    
    return{name: search.name, element: card}
   })
})

