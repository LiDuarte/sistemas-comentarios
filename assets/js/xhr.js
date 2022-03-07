var xml = new XMLHttpRequest();

    xml.onreadystatechange = function() {
        if( xml.readyState==4 && xml.status==200 ){
            console.log(xml);
        }
    };

    
    document.getElementById("form1").addEventListener("click", function(){
        pessoa = {};
        pessoa.nome = document.getElementById("name").value;
        pessoa.comment = document.getElementById("comment").value;
        
        
    
    var pessoaString = JSON.stringify(pessoa);
    
    

    xml.open("POST", "http://localhost/sistemas-comentarios/comentar.php", false);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(`dados=${pessoaString}`);

    if(xml.responseText == 1){
        
        var box_comment = document.querySelector(".box_comment");
            
            boxTemporaria = box_comment.innerHTML;

            boxNovo = `<h2>${pessoa.nome}</h2>
            <h4>${pessoa.comment}</h4>`;

            boxTemporaria = boxNovo + boxTemporaria;

            box_comment.innerHTML = boxTemporaria;
        
        

    }

        
});
 