function checkName(str) {
    if (str.length == 0)
    { 
    
        document.getElementById("show_member_info").innerHTML = "No results.";
        return;
    
    }
    else
    {
     
        var xmlhttp = new XMLHttpRequest();
     
        xmlhttp.onreadystatechange = function()
        {
     
            if (this.readyState == 4 && this.status == 200)
            {
			    
                document.getElementById("show_member_info").innerHTML = this.responseText;
            
            }
        
        };
        
        xmlhttp.open("GET", "../processes/attendance-check-member.php?name=" + str, true);
        xmlhttp.send();
    
    }

}