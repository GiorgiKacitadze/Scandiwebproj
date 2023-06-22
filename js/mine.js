
// add

const attributeSelect = document.getElementById('attribute');
const valueInput = document.getElementById('val');
const ValueName = document.getElementById('valuename')

attributeSelect.addEventListener('click', foo)



function foo(){
  


    if (attributeSelect.value === 'Mb') {
        ValueName.innerText = "Size"
        valueInput.value = "MB"
        
      } else if (attributeSelect.value === 'Kg') {
        ValueName.innerText = "Weight"
        valueInput.value = "Kg"
      } else if (attributeSelect.value === 'dimensions') {
        ValueName.innerText = "dimensions"
        
      }
      
}






// inputs


var valid = document.getElementsByClassName('valid');


for (var i = 0; i < valid.length; i++) {
  var val = valid[i];
  if (val.innerText.toLowerCase().includes('mb')) {
  
    val.innerText = 'SIZE' + ' ' + val.innerText;
  }

  if (val.innerText.toLowerCase().includes('kg')) {
   
    val.innerText = 'Weight' + ' ' + val.innerText;
  }

  if (val.innerText.toLowerCase().includes('x')) {
    
    val.innerText = 'dimensions' + ' ' + val.innerText;
  }
}















 










  













   
  