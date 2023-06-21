<html>
<head> 
<title>{$titre}</title> 
{literal} 
<style>   
h1 
    {    
    font-family: sans-serif;     
    font-size: 20px;   
    }   
h4 
    {     
        font-family: sans-serif;     
        font-size: 12px;   
        }   
.contenu 
    {     
        font-family: sans-serif;     
        font-size: 12px;   
        } 
        </style> 
        <script> 
function affiche_form_comment() {  
    o = document.getElementById("form_comment");   
    if (o) { o.style.display = ""; }   
    o = document.getElementById("lien_comment");   
    if (o) { o.style.display = "none"; } 
    } 
    </script> 
    {/literal} 
    </head> 

    <body> 
    <span class="contenu"> 
    <a href="index_blog.php">Mon blog</a> 

    <h1>{$titre}</h1> 
    {$date} 
    <p> 
    {$contenu} 
    </p> Catégorie : {$categorie}<br /> 
    <br /> 

    <h4>Commentaires</h4> 
    {section name=i loop=$commentaires} 
    <b>{$commentaires[i].nom}</b> 
    ({$commentaires[i].date})<br /> 
    {$commentaires[i].comment} 
    <br />
    <br /> 
    {/section}

    <div id="lien_comment">   
    <a href="JavaScript:affiche_form_comment();">Ajouter un commentaire</a> 
    
    </div> <div id="form_comment" style="display: none;">   
    <form method="post" action="commenter_blog.php">     
    <input type="hidden" name="ID" value="{$id}">   

    Votre nom :<br />     
    <input name="nom" type="text" />     
    <br /><br />  

    Commentaire :<br />     
    <textarea name="commentaire" rows="8" cols="40"></textarea>     
    <br />     
    
    <input type="submit" value="Poster le commentaire">   
    </form> 
    </div> 
    </span> 
    </body> 
    </html> 