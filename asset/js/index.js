let testImage = document.getElementById('image');
let img = document.getElementById('test');

let image;

    testImage.addEventListener('input', ()=>{
        image = testImage.value;
        console.log(image);
         let chaine = image;

        let tableau = chaine.split("\\");

        console.log(tableau[2]);

        img.src = "../images/"+tableau[2];
    })
 
       
