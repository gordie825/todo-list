$(document).ready(function(){
    var item = 0;
    $("li").each(function(c){
         // A Call For Any Item That Has Been Clicked In The List
         $(this).click(function(){
            checked = c;
             //check the status of li before setting text-decoration
             if(item == 0){
                $(this).css("text-decoration", "line-through");
                item = 1;
                sessionStorage.setItem(checked, item);
     
               }else{
                   $(this).css("text-decoration", "none");
                   item = 0;
                   sessionStorage.setItem(checked, item);
                }
            });
        });