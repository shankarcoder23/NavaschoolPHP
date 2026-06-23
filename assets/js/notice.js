
document.addEventListener("DOMContentLoaded", function(){

    const noticeList = document.getElementById("noticeList");
    const wrapper = document.querySelector(".notice-scroll-area");

    noticeList.innerHTML += noticeList.innerHTML;

    let scroll = 0;
    let speed = 0.5;
    let paused = false;

    wrapper.addEventListener("mouseenter", () => {
        paused = true;
    });

    wrapper.addEventListener("mouseleave", () => {
        paused = false;
    });

    function animate(){

        if(!paused){

            scroll += speed;

            if(scroll >= noticeList.scrollHeight / 2){
                scroll = 0;
            }

            noticeList.style.transform =
                `translateY(-${scroll}px)`;
        }

        requestAnimationFrame(animate);
    }

    animate();

});
