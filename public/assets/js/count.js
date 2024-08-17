(()=>{

    let achievementSection= document.getElementById("achievement")
    let milestoneSpan=document.querySelectorAll("#milestone")
    let activated= false;
    window.onscroll=()=>{
        if(pageYOffset > achievementSection.offsetTop - achievementSection.offsetHeight - 200 && !activated){
            milestoneSpan.forEach(span=>{
                let count =0;
                const updateCount = ()=>{
                    const target = parseInt(span.dataset.target);
                    if(count < target){
                        count++;
                        span.textContent='+ '+count;
                        setTimeout(updateCount,10);
                    }else{
                        span.textContent= '+ '+ target;
                    }
                }
                updateCount();
                activated = true;
            });
        }else if(pageYOffset < achievementSection.offsetTop - achievementSection.offsetHeight - 500 || pageYOffset == 0 && activated){
            milestoneSpan.forEach(span=>{
                span.textContent='+ 0';
            });
            activated = false;
        }
    }
})()