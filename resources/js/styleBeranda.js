const toggle = document.getElementById('humberger')
const nav = document.getElementById('nav')


toggle.addEventListener('click', function(){
    const ada = nav.classList.contains('min-h-0')
    if(ada){
        nav.classList.add('min-h-[320px]')
        // nav.classList.add('')
        nav.classList.remove('min-h-0')
    }else{
        nav.classList.add('min-h-0')
        nav.classList.remove('min-h-[320px]')
    }
})
