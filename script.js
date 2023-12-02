document.getElementById('generatebtn').addEventListener('click', function(){
    var passwordLength=document.getElementById('myRange').value;
    var includeCharacters=document.getElementById('characters').checked
    var includeNumbers=document.getElementById('numbers').checked
    var includeAlphabets=document.getElementById('alphabets').checked
    
    var password= generatepassword(passwordLength, includeAlphabets,includeCharacters,includeNumbers);

    var alertMessageElement = document.getElementById('alertMessage');

    if(password===""){
        alertMessageElement.innerHTML='Please Select atleast one option'
        return;
    }
    
    document.getElementById('alertMessage').innerHTML = ""

    document.getElementById('generateout').value=password;

})

   
    

    function copyToClipboard(){
       var copyText=document.getElementById('generateout')
       copyText.select();
       copyText.setSelectionRange(0, 99999)
       navigator.clipboard.writeText(copyText.value)


       

    }
  function generatepassword(passwordLength, includeAlphabets,includeCharacters,includeNumbers){
    var charset = "";
    if(includeAlphabets){
        charset+="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"
    }
    if (includeNumbers) {
        charset += "0123456789";
      }
      if (includeCharacters) {
        charset += "!@#$%^&*()_+";
      }

      if(charset===""){
        return ""
      }
    var password=""
    for(var i=0;i<passwordLength;i++){
        var randomIndex= Math.floor(Math.random() * charset.length)
        password += charset.charAt(randomIndex)
    }
    return password;


  }