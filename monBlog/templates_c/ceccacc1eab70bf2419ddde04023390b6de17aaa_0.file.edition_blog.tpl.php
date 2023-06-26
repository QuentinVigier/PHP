<?php
/* Smarty version 3.1.36, created on 2020-12-27 18:26:32
  from 'C:\wamp64\www\monBlog\templates\edition_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5fe8d1d8416818_79336273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ceccacc1eab70bf2419ddde04023390b6de17aaa' => 
    array (
      0 => 'C:\\wamp64\\www\\monBlog\\templates\\edition_blog.tpl',
      1 => 1609091990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe8d1d8416818_79336273 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
    
    <style>
        h1 {
        font-family: sans-serif;
        font-size: 20px;
        }
        table.champs_saisie {
        font-family: sans-serif;
        font-size: 12px;
        }
        table.champs_saisie td {
        vertical-align: top;
        }
    </style>
     
</head>
<body>
    <h1>Nouveau billet</h1>
    <form method="post" action="editer_blog.php">
        <table class="champs_saisie">
            <tr> 
                <td>Titre :</td>
                <td><input name="titre" type="text" /></td> 
            </tr>
            <tr> 
                <td>Contenu :</td>
                <td><textarea name="contenu" rows="15" cols="40"></textarea></td>
            </tr>
            <tr> 
                <td>Catégorie :</td>
                <td><input name="categorie" type="text" /> 
            </tr>
            <tr> 
                <td><input name="submit" type="submit" value="Poster" /></td> 
            </tr>
        </table>
    </form>
</body>
</html> <?php }
}
