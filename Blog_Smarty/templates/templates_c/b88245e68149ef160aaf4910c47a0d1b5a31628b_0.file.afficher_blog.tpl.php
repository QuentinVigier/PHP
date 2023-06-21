<?php
/* Smarty version 4.3.1, created on 2023-06-21 13:08:53
  from 'C:\wamp64\www\PHP\Blog_Smarty\templates\afficher_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6492f6651b35e3_73780532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88245e68149ef160aaf4910c47a0d1b5a31628b' => 
    array (
      0 => 'C:\\wamp64\\www\\PHP\\Blog_Smarty\\templates\\afficher_blog.tpl',
      1 => 1687352861,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6492f6651b35e3_73780532 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head> 
<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title> 
 
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
        <?php echo '<script'; ?>
> 
function affiche_form_comment() {  
    o = document.getElementById("form_comment");   
    if (o) { o.style.display = ""; }   
    o = document.getElementById("lien_comment");   
    if (o) { o.style.display = "none"; } 
    } 
    <?php echo '</script'; ?>
> 
     
    </head> 

    <body> 
    <span class="contenu"> 
    <a href="index_blog.php">Mon blog</a> 

    <h1><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h1> 
    <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 
    <p> 
    <?php echo $_smarty_tpl->tpl_vars['contenu']->value;?>
 
    </p> Catégorie : <?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>
<br /> 
    <br /> 

    <h4>Commentaires</h4> 
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['commentaires']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?> 
    <b><?php echo $_smarty_tpl->tpl_vars['commentaires']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['nom'];?>
</b> 
    (<?php echo $_smarty_tpl->tpl_vars['commentaires']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
)<br /> 
    <?php echo $_smarty_tpl->tpl_vars['commentaires']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment'];?>
 
    <br />
    <br /> 
    <?php
}
}
?>

    <div id="lien_comment">   
    <a href="JavaScript:affiche_form_comment();">Ajouter un commentaire</a> 
    
    </div> <div id="form_comment" style="display: none;">   
    <form method="post" action="commenter_blog.php">     
    <input type="hidden" name="ID" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">   

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
    </html> <?php }
}
