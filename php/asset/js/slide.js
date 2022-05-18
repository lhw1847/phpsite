const sliderWrap = document.querySelector(".slider__wrap");
const sliderImg = document.querySelector(".slider__img");
const sliderInner = document.querySelector(".slider__inner");
const slider = document.querySelectorAll(".slider");
const sliderBtn = document.querySelector(".slider__btn");
const sliderBtnPrev = document.querySelector(".slider__btn .prev");
const sliderBtnNext = document.querySelector(".slider__btn .next");
const sliderDot = document.querySelector(".slider__dot");
let posInitial = "";
let dotIndex = "";
let sliderTimer = "";
let interval = 2500;

let currentIndex = 0;
let sliderWidth = sliderImg.offsetWidth;    //이미지 가로 값
let sliderLength = slider.length    //이미지 갯수
let slideFirst = slider[0]; //첫 번째 이미지
let slideLast = slider[sliderLength - 1]; //마지막 이미지
let cloneFirst = slideFirst.cloneNode(true);    //첫 번째 이미지 복사
let cloneLast = slideLast.cloneNode(true);  //마지막 이미지 복사

//이미지 복사 jQrery = appendTo()/preppendTo
sliderInner.appendChild(cloneFirst);
sliderInner.insertBefore(cloneLast, slideFirst);

//이미지 복사 jQrery = appendTo()/preppendTo
sliderInner.appendChild(cloneFirst);
sliderInner.insertBefore(cloneLast, slideFirst);

function gotoSlider(index){
    sliderInner.classList.add("transition");
    sliderInner.style.left = -sliderWidth * (index + 1) + "px";
    console.log(currentIndex);
    currentIndex = index;
    // console.log(index)
    dotActive();
}

function dotInit(){
    for(let i=0; i<sliderLength; i++){
        dotIndex += "<a href='#' class='dot'></a>";
    }
    dotIndex += "<a href='#' class='play'>play</a>";
    dotIndex += "<a href='#' class='stop show'>stop</a>";
    sliderDot.innerHTML = dotIndex;
    sliderDot.firstElementChild.classList.add("active");
}

//닷 버튼 활성화
function dotActive(){
    let dotAll = document.querySelectorAll(".slider__dot .dot");
    dotAll.forEach(dot => { //전체 닷 메뉴 비활성화
        dot.classList.remove("active");
    })
    //현재 보고 있는 이미지 닷 활성화
    if(currentIndex == sliderLength){   //마지막 이미지 왔을 때
        dotAll[0].classList.add("active");
    } else if(currentIndex == -1){     //처음 이미지 왔을 때
        dotAll[sliderLength -1].classList.add("active");
    } else {
        dotAll[currentIndex].classList.add("active");
    }
}

dotInit();

function autoPlay(){
    sliderTimer = setInterval(()=>{
        gotoSlider(currentIndex + 1);
    }, interval)
}
autoPlay()
function stopPlay(){
    clearInterval(sliderTimer);
}

sliderBtnPrev.addEventListener("click", () => {
    let prevIndex = currentIndex - 1;
    gotoSlider(prevIndex);
});
sliderBtnNext.addEventListener("click", () => {
    let nextIndex = currentIndex + 1;
    gotoSlider(nextIndex);
});

sliderInner.addEventListener("transitionend", () => {
    sliderInner.classList.remove("transition");
    if(currentIndex == -1){
        sliderInner.style.left =  -(sliderLength * sliderWidth) + "px";
    console.log(currentIndex);
    currentIndex = sliderLength -1;
    }
    if(currentIndex == sliderLength){
        sliderInner.style.left = -(1 * sliderWidth) + "px";
    console.log(currentIndex);
    currentIndex = 0;
    }
});

// sliderInner.addEventListener("mouseenter", ()=>{
//     stopPlay();
// })
// sliderInner.addEventListener("mouseleave", ()=>{
//     if(document.querySelector(".play").classList.contains("show")){
//         stopPlay();
//     } else {
//         autoPlay();
//     }
// })

document.querySelector(".play").addEventListener("click", () => {
    document.querySelector(".play").classList.remove("show");
    document.querySelector(".stop").classList.add("show");
    autoPlay();
;})
document.querySelector(".stop").addEventListener("click", () => {
    document.querySelector(".play").classList.add("show");
    document.querySelector(".stop").classList.remove("show");
    stopPlay();
})