function like(id){
            
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    
        var myObj = JSON.parse(this.responseText);
        var element="like-count"+id;
        document.getElementById(element).innerHTML = myObj.likes;
    

        
        
    
    }
    };
    
    xmlhttp.open("GET","http://localhost/likes/update_likes.php?id="+id + "&action=like");
    xmlhttp.setRequestHeader("Content-Type", "application/json"); 
    xmlhttp.send();
    }










function dislike(id){
    
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    
        var myObj = JSON.parse(this.responseText);
        var element="dislike-count"+id;
        document.getElementById(element).innerHTML = myObj.dislikes;
    

        
        
    
    }
    };
    
    xmlhttp.open("GET","http://localhost/likes/update_likes.php?id="+id + "&action=dislike");
    xmlhttp.setRequestHeader("Content-Type", "application/json"); 
    xmlhttp.send();
    }