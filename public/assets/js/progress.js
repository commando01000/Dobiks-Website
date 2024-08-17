(()=>{
    const progressBars= document.querySelectorAll(".progress-value");
    progressBars.forEach(bar=>bar.style.width=bar.dataset.progress);
})()