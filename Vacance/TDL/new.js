var paraStyle_test = document.querySelectorAll('.paraStyle_test');
var toDoCont = document.querySelector('#toDoCont');
var btnToDo = document.querySelector('#btnToDo');
var inputT = document.querySelector('#inputT');
var form = document.querySelector('form');

inputT.focus();



paraStyle_test.forEach((test) => {
    test.addEventListener('click',() => {
        if(!test.classList.contains('paraClick')){
            test.classList.add('paraClick');
        }else{
            test.classList.remove('paraClick');
        }
    });
});

const completed_tasks = ()=>{
    const complet = document.querySelectorAll('.paraStyle_test')

    complet.forEach((comp) => {

        if(!comp.classList.contains('paraClick')){
            comp.classList.add('paraClick');
        }else{
            comp.classList.remove('paraClick');
        }
    });
}

// useEffect(() => {
//     const menuBtn = document.getElementById('menu-btn');
//     const menu = document.querySelector('.menu')

//     menuBtn.addEventListener('click', () =>{
//     menu.classList.toggle('menu-open')
//     })    
//     }, []);

//     useEffect(()=>{
//     const navbar = document.getElementById('navbar')
//     const offset = 50

//     window.addEventListener("scroll", () =>{
//       if(pageYOffset > offset){
//         navbar.classList.add('navbar-active')
//       }else{
//         navbar.classList.remove('navbar-active')
//       }
//     })
//     }, [])

    
