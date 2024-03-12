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

    