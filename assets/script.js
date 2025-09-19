document.addEventListener('DOMContentLoaded', function() {
  console.log('DOMContentLoaded');

  let element = document.getElementById('phone');

  if(element) {
    console.log('ok');
    
    const maskOptions = {
      mask: '+7 (000) 000-00-00',
      lazy: false
  } 
  let mask = new IMask(element, maskOptions);
  }
});