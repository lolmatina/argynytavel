require('./bootstrap');
// require('./components/HelloReact')


// import './bootstrap';
// import './slider'

// const path = document.getElementById('path');
// const circ = document.getElementById('square');
// const pathLength = path.getTotalLength();

// const headerBg = document.querySelector('.header_bg');

// function setPosition(perc){
//   let dist = pathLength * perc;
//   let point = path.getPointAtLength(dist);
//   let point2 = path.getPointAtLength((dist + 2) % pathLength);
//   angle = Math.atan2( (point2.y - point.y), 
//                       (point2.x - point.x) ); 
//   circ.style.setProperty("--transform", `translate(${point.x - 85.745}px, ${point.y - 89.355}px) rotate(${angle*180/Math.PI + 116.2 - 90}deg)`);
//   headerBg.style.setProperty("--yOffset", `${20 * (perc * 2500) / window.innerHeight}%`);
// }

// window.addEventListener("scroll", (e) => {
//   setPosition(window.pageYOffset / (2500));
// })

// var observer = new IntersectionObserver(function(entries) {
//   entries.forEach(entry => {
//     if(entry.isIntersecting === true) {
//       entry.target.classList.add('show');
//     } else {
//       entry.target.classList.remove('show');
//     }
//   })
// }, { threshold: 0 });

// const animate = document.getElementsByClassName('animate');
// console.log(animate);
// for (let i = 0; i < animate.length; i++)
//   observer.observe(animate[i]) 


// // Gets all elements with class name "slider"
// const slider = document.querySelectorAll('.slider');

// function createSlider(slider){
//   // Gets all inner elements
//   const wrapper  = slider.querySelector('.slider-content');   // Item bar
//   const blocks   = wrapper.querySelectorAll('.slider-block'); // All slider items
//   const buttons  = slider.querySelector('.slider-control');   // Control button bars
//   const leftBtn  = buttons.querySelector('.slider-left');     // Left Btn
//   const rightBtn = buttons.querySelector('.slider-right');    // Right Btn

//   // set the initial value
//   wrapper.setProperty('--offset', '0%');


//   // Calculate the size of the wrapper (every step contains 2 items)
//   const blockSize = blocks.length * 50;
//   wrapper.style.width = `${blockSize}%`;

//   // Calculate the step
//   const step = 100 / (blocks.length / 2);

//   // Click event for left button
//   leftBtn.addEvenListener('click', () => {
//     const currentOffset = wrapper.getPropertyValue('--offset').match(/\d+/)[0];

//     if (currentOffset <= 0) return;

//     rightBtn.style.display = 'block';
//     wrapper.setProperty('--offset', `${currentOffset - step}%`);
    
//     if (currentOffset - step == 0)
//       left.style.display = 'block';
//   });

//   // Click event for right button
//   rightBtn.addEvenListener('click', () => {
//     const currentOffset = wrapper.getPropertyValue('--offset').match(/\d+/)[0];

//     if (currentOffset >= 100 - step) return;

//     leftBtn.style.display = 'block';
//     wrapper.setProperty('--offset', `${currentOffset + step}%`);
    
//     if (currentOffset + step == 100 - step)
//       rightBtn.style.display = 'block';
//   });
// }

// slider.forEach((slider) => createSlider(slider));
