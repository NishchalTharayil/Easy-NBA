//for hiding subjectwise data 
var a;
    function show_hide(){
      if(a==1){
        document.getElementById("tab").style.display="inline";
        return a=0;
      }
      else{
        document.getElementById("tab").style.display="none";
        return a=1;
      }
    }