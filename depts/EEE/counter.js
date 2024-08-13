let valueDisplays=document.querySelectorAll(".num");
let interval =5000;

valueDisplays.forEach((valueDisplay)=>{
    let start=0;
    let end=parseInt(valueDisplay.getAttribute("data-val"));
    console.log(end);

    let duration=Math.floor(interval/end);
    let counter=setInterval(function(){
        start+=1;
        valueDisplay.textContent=start;
        if(start==end){
            clearInterval(counter);
        }
    },duration);
});
  
  