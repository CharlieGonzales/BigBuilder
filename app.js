const navSlide=()=> {
    const burger =document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click',()=>{
    nav.classList.toggle('nav-active');
    navLinks.forEach((link, index)=> {
       if(link.style.animation){
       link.style.animation= '';
    }
    else{
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
    }
    });

burger.classList.toggle('toggle');

 });
}
navSlide();

const sections=document.querySelectorAll('section');
const bubble= document.querySelector('.bubble');
const options={
    threshold:0.7
        };

          let observer = new IntersectionObserver(navCheck, options);
            function navCheck(entries){
                entries.forEach(entry =>{
                    console.log(entry);
                    const className= entry.target.className;
                    const activeAnchor = document.querySelector(`[data-page=${className}]`);
                    const coords= activeAnchor.getBoundingClientRect();
                    const directions=
                    {
                        height: coords.height,
                        width: coords.width,
                        top: coords.top,
                        left: coords.left
                     }
                       if(entry.isIntersecting)
                {
                    bubble.style.setProperty('left', `${directions.left}px`);
                    bubble.style.setProperty('top', `${directions.top}px`);
                    bubble.style.setProperty('width', `${directions.width}px`);
                    bubble.style.setProperty('height', `${directions.height}px`);

                }
        });

    }

sections.forEach(section=>{
    observer.observe(section);

    });

   
    
var btn = document.getElementById('mybtn');
btn.addEventListener('click', function() {
  document.location.href = 'index.php';
});
