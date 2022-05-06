// const newsPapers = document.querySelectorAll(".newspaper-item");
// const subNewsPapers = document.querySelectorAll(".list-sub-newspaper");
// const iconShow = document.querySelector(".view");
// const iconHidden = document.querySelector(".hidden");

// for (const newsPaper of newsPapers) {
//     for (const subNewsPaper of subNewsPapers) {
//         if (newsPaper.clientHeight < 55) {
//             subNewsPaper.style.display = "none";
//             iconShow.style.display = "none";
//             iconHidden.style.display = "initial"
//         }
//         newsPaper.addEventListener("click", showSubNewsPaper);

//         function showSubNewsPaper() {
//             const isHidden = newsPaper.clientHeight < 55
//             if (isHidden) {
//                 // ?An Hien Sub Newspaper
//                 subNewsPaper.style.display = "block"
//                 iconShow.style.display = "inline-block"
//                 iconHidden.style.display = "none"
//                 // ?Doi mau boder va font
//                 newsPaper.classList.add('change-color')
//                 // ?Xem chieu cao
//                 // console.log(newsPaper.clientHeight);
//             } else {
//                 subNewsPaper.style.display = "none";
//                 iconShow.style.display = "none";
//                 iconHidden.style.display = "initial"
//                 newsPaper.classList.remove('change-color')
//             }

//         }
//     }
// }

// const btns = document.querySelectorAll('.accordion-button')
// const items = document.querySelectorAll('.accordion-item')
// const item of items
    
//     const btn of btns
   
//         btn.addEventListener("click", show);
//         // if(item.clientHeight > 45){
//         //     item.classList.remove('change-color')
//         // }
//         // if(item.clientHeight <= 45){
//         //     item.classList.add('change-color')
//         // }
//         function show() {
//             // console.log(item.clientHeight)
//             // console.log(even)
//             if(item.clientHeight <= 45){
//                 item.classList.add('change-color')
//             }
//             else{
//                 item.classList.remove('change-color')
//             }
//         }
const hearts = document.querySelectorAll('.fa-heart')
const numbers = document.querySelectorAll('.number')
var i = 1

// console.log(i)
for(const heart of hearts){
    for(const number of numbers){
        function heartSuccess(){
            heart.classList.remove('far');
            heart.classList.add('fas')
        
            number.innerHTML = i++;
        }
    }
    heart.addEventListener("click", heartSuccess);

}
    var date = new Date();
    const year = date.getFullYear();
    const month= date.getMonth() + 1;
    const day = date.getDate();
    var dayweek = date.getDay();
    // function updateTime() {
    //     var time = date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds();
    //     console.log(time)
    //     $("#time").text(time);
        
    //   }
    // var update = setInterval(updateTime, 1000);
    
    var day_name = '';

    switch (dayweek) {
    case 0:
        day_name = "Chủ Nhật";
        break;
    case 1:
        day_name = "Thứ Hai";
        break;
    case 2:
        day_name = "Thứ Ba";
        break;
    case 3:
        day_name = "Thứ Tư";
        break;
    case 4:
        day_name = "Thứ Năm";
        break;
    case 5:
        day_name = "Thứ Sáu";
        break;
    case 6:
        day_name = "Thứ Bảy";
    }
    $("#dayweek").text(day_name);
    $("#day").text(day);
    $("#month").text(month);
    $("#year").text(year);

    var time = setInterval(time, 1000);
    function time() {
        var d = new Date();
        var t = d.toLocaleTimeString();
        document.getElementById("time").innerHTML = t;
    }
    