const app = document.getElementById('typewriter');

const typewriter = new Typewriter(app,{
    loop:true,
    delay:75
})

typewriter
.typeString('En el centro de la Ciudad')
.pauseFor(200)
.start();

