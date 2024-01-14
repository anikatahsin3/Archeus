function getCv(){
    document.body.classList.add('page')

    document.body.classList.remove('page')

}

let dlCv = document.getElementById('pdf_button')

let areaCv = document.getElementById('pdf')

function generateCv(){
    html2pdf(areaCv)
}


dlCv.addEventListener('click', () =>{

    getCv()

    generateCv()
})