let MenuMedia = window.matchMedia("(max-width: 980px)");
myFunction(MenuMedia);
MenuMedia.addListener(myFunction);

function myFunction(MenuMedia) {
    if (MenuMedia.matches){
        document.querySelector('.second-menu > ul').innerHTML = `
                <li><a href="#">Գլխավոր</a><span></span></li>
                <li><a href="#">Մեր Մասին</a></li>
                <li><a href="#">Դասընթացներ</a><span></span></li>
                <li><a href="#">Ծառայություներ</a></li>
                <li><a href="#">Ֆորում</a><span></span></li>
                <li><a href="#">Կոնտակտ</a></li>
            `
    }else{
        document.querySelector('.second-menu > ul').innerHTML = `
            <li><a href="#">Մեր Մասին</a></li>
            <li><a href="#">Կոնտակտ</a></li>
            <li><a href="#">Ծառայություներ</a></li>
            `
    }
}

document.getElementById('second-menu-opener').onclick = function(){
    document.getElementById('second-menu').classList.toggle('second-menu--active')
}

document.querySelector('.second-menu--close-btn').onclick = function(){
    document.querySelector('.second-menu').classList.remove('second-menu--active')
}

document.getElementById('menu-login').onclick = function(){
    document.querySelector('.login').style.display = "flex"
    document.body.classList.add('scroll')
}
document.getElementById('login-close').onclick = function(){
    document.querySelector('.login').style.display = "none"
    document.body.classList.remove('scroll')
}

let passwordSee = document.querySelectorAll('.password-see');

for (elem of passwordSee) {
    elem.onclick = function(){
        let password = document.querySelectorAll('.password')
        for(elem of password){
            if(elem.hasAttribute('type', 'password')){
                elem.removeAttribute('type', 'password')
            }else{
                elem.setAttribute('type', 'password')
            }
        }
    }
}

document.getElementById('menu-registration').onclick = function(){
    document.querySelector('.registration').style.display = "flex"
    document.body.classList.add('scroll')
}
document.getElementById('registration-close').onclick = function(){
    document.querySelector('.registration').style.display = "none"
    document.body.classList.remove('scroll')
}

document.getElementById('login-to-registration').onclick = function(){
    document.querySelector('.registration').style.display = "flex"
    document.querySelector('.login').style.display = "none"
}

document.getElementById('registration-to-login').onclick = function(){
    document.querySelector('.registration').style.display = "none"
    document.querySelector('.login').style.display = "flex"
}

document.querySelector('.live-chat__openner').onclick = function(){
    document.querySelector('.live-chat').classList.toggle('live-chat--active')
}

document.getElementById('footer-login').onclick = function(){
    document.querySelector('.login').style.display = "flex"
    document.body.classList.add('scroll')
}
document.getElementById('footer-signup').onclick = function(){
    document.querySelector('.registration').style.display = "flex"
    document.body.classList.add('scroll')
}