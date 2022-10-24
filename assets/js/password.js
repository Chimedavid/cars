const showBtn = document.querySelector('#show');
const passWord = document.querySelector('#pass');

showBtn.addEventListener('click',()=>{
    showBtn.classList.toggle('fa-eye')
    showBtn.classList.toggle('fa-eye-slash')
    if (passWord.type === 'password') {
        passWord.type = 'text';
    }else{
        passWord.type ='password';  
    }
    
})