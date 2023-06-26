<?php
/* Smarty version 3.1.36, created on 2023-06-20 15:26:07
  from 'C:\xampp\htdocs\php-works\monBlog\templates\index_blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6491a8efd0e4d5_95456615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b24d5c34c55d725a980c052382953f00da41b7c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-works\\monBlog\\templates\\index_blog.tpl',
      1 => 1609089538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6491a8efd0e4d5_95456615 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
        
        <style>
            table.billets {
            font-size: 12px;
            }
            table.billets td {
            padding-bottom: 7px;
            }
            .entete {
            font-size: 14px;
            font-weight: bold;
            }
        </style>
        
    </head>
    <body>
        <a href="index_blog.php">Mon blog</a>
        <?php if ($_smarty_tpl->tpl_vars['categorie']->value) {?>
        <br>
        Catégorie : <?php echo $_smarty_tpl->tpl_vars['categorie']->value;?>

        <?php }?>
        <br />
        <table class="billets">
            <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['billets']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr>
                    <td>
                        <span class="entete">
                        <a href="affiche_blog.php?ID=<?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ID'];?>
"><?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['titre'];?>
</a>
                        </span>
                        <br/>
                        <?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['date'];?>
<br />
                        <?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['annonce'];?>
<br />
                        Catégorie : <a href="index_blog.php?categorie=<?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['param_cat'];?>
">
                        <?php echo $_smarty_tpl->tpl_vars['billets']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['categorie'];?>

                        </a>
                    </td>
                </tr>
            <?php
}
}
?>
        </table>
    </body>
</html><?php }
}
